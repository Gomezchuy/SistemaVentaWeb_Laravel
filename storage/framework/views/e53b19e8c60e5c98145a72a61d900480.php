<?php $__env->startComponent('admin::emails.layout'); ?>
    <div style="margin-bottom: 34px;">
        <span style="font-size: 22px;font-weight: 600;color: #121A26">
            <?php echo app('translator')->get('admin::app.emails.orders.created.title'); ?>
        </span> <br>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            <?php echo app('translator')->get('admin::app.emails.dear', ['admin_name' => core()->getAdminEmailDetails()['name']]); ?>,👋
        </p>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            <?php echo __('admin::app.emails.orders.created.greeting', [
                'order_id' => '<a href="' . route('admin.sales.orders.view', $order->id) . '" style="color: #2969FF;">#' . $order->increment_id . '</a>',
                'created_at' => core()->formatDate($order->created_at, 'Y-m-d H:i:s')
                ]); ?>

        </p>
    </div>

    <div style="font-size: 20px;font-weight: 600;color: #121A26">
        <?php echo app('translator')->get('admin::app.emails.orders.created.summary'); ?>
    </div>

    <div style="display: flex;flex-direction: row;margin-top: 20px;justify-content: space-between;margin-bottom: 40px;">
        <?php if($order->shipping_address): ?>
            <div style="line-height: 25px;">
                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo app('translator')->get('admin::app.emails.orders.shipping-address'); ?>
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;margin-bottom: 40px;">
                    <?php echo e($order->shipping_address->company_name ?? ''); ?><br/>

                    <?php echo e($order->shipping_address->name); ?><br/>
                    
                    <?php echo e($order->shipping_address->address1); ?><br/>
                    
                    <?php echo e($order->shipping_address->postcode . " " . $order->shipping_address->city); ?><br/>
                    
                    <?php echo e($order->shipping_address->state); ?><br/>

                    ---<br/>

                    <?php echo app('translator')->get('admin::app.emails.orders.contact'); ?> : <?php echo e($order->billing_address->phone); ?>

                </div>

                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo app('translator')->get('admin::app.emails.orders.shipping'); ?>
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;">
                    <?php echo e($order->shipping_title); ?>

                </div>
            </div>
        <?php endif; ?>

        <?php if($order->billing_address): ?>
            <div style="line-height: 25px;">
                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo app('translator')->get('admin::app.emails.orders.billing-address'); ?>
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;margin-bottom: 40px;">
                    <?php echo e($order->billing_address->company_name ?? ''); ?><br/>

                    <?php echo e($order->billing_address->name); ?><br/>
                    
                    <?php echo e($order->billing_address->address1); ?><br/>
                    
                    <?php echo e($order->billing_address->postcode . " " . $order->billing_address->city); ?><br/>
                    
                    <?php echo e($order->billing_address->state); ?><br/>

                    ---<br/>

                    <?php echo app('translator')->get('admin::app.emails.orders.contact'); ?> : <?php echo e($order->billing_address->phone); ?>

                </div>

                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo app('translator')->get('admin::app.emails.orders.payment'); ?>
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;">
                    <?php echo e(core()->getConfigData('sales.payment_methods.' . $order->payment->method . '.title')); ?>

                </div>

                <?php $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($order->payment->method); ?>

                <?php if(! empty($additionalDetails)): ?>
                    <div style="font-size: 16px; color: #384860;">
                        <div><?php echo e($additionalDetails['title']); ?></div>
                        <div><?php echo e($additionalDetails['value']); ?></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <div style="padding-bottom: 40px;border-bottom: 1px solid #CBD5E1;">
        <table style="overflow-x: auto; border-collapse: collapse;
        border-spacing: 0;width: 100%">
            <thead>
                <tr style="color: #121A26;border-top: 1px solid #CBD5E1;border-bottom: 1px solid #CBD5E1;">
                    <?php $__currentLoopData = ['sku', 'name', 'price', 'qty']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th style="text-align: left;padding: 15px">
                            <?php echo app('translator')->get('admin::app.emails.orders.' . $item); ?>
                        </th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>

            <tbody style="font-size: 16px;font-weight: 400;color: #384860;">
                <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: left;padding: 15px"><?php echo e($item->getTypeInstance()->getOrderedItem($item)->sku); ?></td>

                        <td style="text-align: left;padding: 15px">
                            <?php echo e($item->name); ?>


                            <?php if(isset($item->additional['attributes'])): ?>
                                <div>

                                    <?php $__currentLoopData = $item->additional['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <b><?php echo e($attribute['attribute_name']); ?> : </b><?php echo e($attribute['option_label']); ?></br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            <?php endif; ?>
                        </td>

                        <td style="text-align: left;padding: 15px"><?php echo e(core()->formatPrice($item->price, $order->order_currency_code)); ?>

                        </td>

                        <td style="text-align: left;padding: 15px"><?php echo e($item->qty_ordered); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div style="display: grid;justify-content: end;font-size: 16px;color: #384860;line-height: 30px;padding-top: 20px;padding-bottom: 20px;">
        <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
            <span>
                <?php echo app('translator')->get('admin::app.emails.orders.subtotal'); ?>
            </span>

            <span style="text-align: right;">
                <?php echo e(core()->formatPrice($order->sub_total, $order->order_currency_code)); ?>

            </span>
        </div>

        <?php if($order->shipping_address): ?>
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span>
                    <?php echo app('translator')->get('admin::app.emails.orders.shipping-handling'); ?>
                </span>

                <span style="text-align: right;">
                    <?php echo e(core()->formatPrice($order->shipping_amount, $order->order_currency_code)); ?>

                </span>
            </div>
        <?php endif; ?>

        <?php $__currentLoopData = Webkul\Tax\Helpers\Tax::getTaxRatesWithAmount($order, false); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxRate => $taxAmount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span>
                    <?php echo app('translator')->get('admin::app.emails.orders.tax'); ?> <?php echo e($taxRate); ?> %
                </span>

                <span style="text-align: right;">
                    <?php echo e(core()->formatPrice($taxAmount, $order->order_currency_code)); ?>

                </span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($order->discount_amount > 0): ?>
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span>
                    <?php echo app('translator')->get('admin::app.emails.orders.discount'); ?>
                </span>

                <span style="text-align: right;">
                    <?php echo e(core()->formatPrice($order->discount_amount, $order->order_currency_code)); ?>

                </span>
            </div>
        <?php endif; ?>

        <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));font-weight: bold">
            <span>
                <?php echo app('translator')->get('admin::app.emails.orders.grand-total'); ?>
            </span>

            <span style="text-align: right;">
                <?php echo e(core()->formatPrice($order->grand_total, $order->order_currency_code)); ?>

            </span>
        </div>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/emails/orders/created.blade.php ENDPATH**/ ?>