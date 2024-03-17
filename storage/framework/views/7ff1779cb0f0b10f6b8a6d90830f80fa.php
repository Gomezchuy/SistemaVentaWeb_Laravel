<?php $__env->startComponent('admin::emails.layout'); ?>
    <div style="margin-bottom: 34px;">
        <span style="font-size: 22px;font-weight: 600;color: #121A26">
            <?php echo e(__('admin::app.emails.orders.shipped.title')); ?>

        </span> <br>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            <?php echo e(__('admin::app.emails.dear', ['admin_name' => core()->getAdminEmailDetails()['name']])); ?>,👋
        </p>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            <?php echo app('translator')->get('admin::app.emails.orders.shipped.greeting', [
                'invoice_id' => $shipment->increment_id,
                'order_id'   => '<a href="' . route('admin.sales.orders.view', $shipment->order_id) . '" style="color: #2969FF;">#' . $shipment->order->increment_id . '</a>',
                'created_at' => core()->formatDate($shipment->order->created_at, 'Y-m-d H:i:s')
            ]); ?>
        </p>
    </div>

    <div style="font-size: 20px;font-weight: 600;color: #121A26">
        <?php echo e(__('admin::app.emails.orders.shipped.summary')); ?>

    </div>

    <div style="display: flex;flex-direction: row;margin-top: 20px;justify-content: space-between;margin-bottom: 40px;">
        <?php if($shipment->order->shipping_address): ?>
            <div style="line-height: 25px;">
                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo e(__('admin::app.emails.orders.shipping-address')); ?>

                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;margin-bottom: 40px;">
                    <?php echo e($shipment->order->shipping_address->company_name ?? ''); ?><br/>

                    <?php echo e($shipment->order->shipping_address->name); ?><br/>
                    
                    <?php echo e($shipment->order->shipping_address->address1); ?><br/>
                    
                    <?php echo e($shipment->order->shipping_address->postcode . " " . $shipment->order->shipping_address->city); ?><br/>
                    
                    <?php echo e($shipment->order->shipping_address->state); ?><br/>

                    ---<br/>

                    <?php echo e(__('admin::app.emails.orders.contact')); ?> : <?php echo e($shipment->order->billing_address->phone); ?>

                </div>

                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo e(__('admin::app.emails.orders.shipping')); ?>

                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;">
                    <?php echo e($shipment->order->shipping_title); ?>

                </div>

                <?php $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($shipment->order->payment->method); ?>

                <?php if(! empty($additionalDetails)): ?>
                    <div style="font-size: 16px; color: #384860;">
                        <div>
                            <span><?php echo e(__('admin::app.emails.orders.carrier')); ?> : </span>
                            
                            <?php echo e($shipment->carrier_title); ?>

                        </div>

                        <div>
                            <span><?php echo e(__('admin::app.emails.orders.tracking-number')); ?> : </span>
                            
                            <?php echo e($shipment->track_number); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if($shipment->order->billing_address): ?>
            <div style="line-height: 25px;">
                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo e(__('admin::app.emails.orders.billing-address')); ?>

                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;margin-bottom: 40px;">
                    <?php echo e($shipment->order->billing_address->company_name ?? ''); ?><br/>

                    <?php echo e($shipment->order->billing_address->name); ?><br/>
                    
                    <?php echo e($shipment->order->billing_address->address1); ?><br/>
                    
                    <?php echo e($shipment->order->billing_address->postcode . " " . $shipment->order->billing_address->city); ?><br/>
                    
                    <?php echo e($shipment->order->billing_address->state); ?><br/>

                    ---<br/>

                    <?php echo e(__('admin::app.emails.orders.contact')); ?> : <?php echo e($shipment->order->billing_address->phone); ?>

                </div>

                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    <?php echo e(__('admin::app.emails.orders.payment')); ?>

                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;">
                    <?php echo e(core()->getConfigData('sales.payment_methods.' . $shipment->order->payment->method . '.title')); ?>

                </div>
            </div>
        <?php endif; ?>
    </div>

    <div style="padding-bottom: 40px;border-bottom: 1px solid #CBD5E1;">
        <table style="overflow-x: auto; border-collapse: collapse;
        border-spacing: 0;width: 100%">
            <thead>
                <tr style="color: #121A26;border-top: 1px solid #CBD5E1;border-bottom: 1px solid #CBD5E1;">
                    <th style="text-align: left;padding: 15px"><?php echo e(__('admin::app.emails.orders.sku')); ?></th>
                    <th style="text-align: left;padding: 15px"><?php echo e(__('admin::app.emails.orders.name')); ?></th>
                    <th style="text-align: left;padding: 15px"><?php echo e(__('admin::app.emails.orders.price')); ?></th>
                    <th style="text-align: left;padding: 15px"><?php echo e(__('admin::app.emails.orders.qty')); ?></th>
                </tr>
            </thead>

            <tbody style="font-size: 16px;font-weight: 400;color: #384860;">
                <?php $__currentLoopData = $shipment->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                        <td style="text-align: left;padding: 15px"><?php echo e(core()->formatPrice($item->price, $shipment->order_currency_code)); ?>

                        </td>

                        <td style="text-align: left;padding: 15px"><?php echo e($item->qty); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div style="display: grid;justify-content: end;font-size: 16px;color: #384860;line-height: 30px;padding-top: 20px;padding-bottom: 20px;">
        <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
            <span><?php echo e(__('admin::app.emails.orders.subtotal')); ?></span>

            <span style="text-align: right;">
                <?php echo e(core()->formatPrice($shipment->sub_total, $shipment->order_currency_code)); ?>

            </span>
        </div>

        <?php if($shipment->order->shipping_address): ?>
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span><?php echo e(__('admin::app.emails.orders.shipping-handling')); ?></span>

                <span style="text-align: right;">
                    <?php echo e(core()->formatPrice($shipment->shipping_amount, $shipment->order_currency_code)); ?>

                </span>
            </div>
        <?php endif; ?>

        <?php $__currentLoopData = Webkul\Tax\Helpers\Tax::getTaxRatesWithAmount($shipment->order, false); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxRate => $taxAmount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span>
                    <?php echo e(__('admin::app.emails.orders.tax')); ?> <?php echo e($taxRate); ?> %
                </span>

                <span style="text-align: right;">
                    <?php echo e(core()->formatPrice($shipment->tax_amount, $shipment->order_currency_code)); ?>

                </span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($shipment->discount_amount > 0): ?>
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span><?php echo e(__('admin::app.emails.orders.discount')); ?></span>

                <span style="text-align: right;">
                    <?php echo e(core()->formatPrice($shipment->discount_amount, $shipment->order_currency_code)); ?>

                </span>
            </div>
        <?php endif; ?>

        <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));font-weight: bold">
            <span><?php echo e(__('admin::app.emails.orders.grand-total')); ?></span>

            <span style="text-align: right;">
                <?php echo e(core()->formatPrice($shipment->grand_total, $shipment->order_currency_code)); ?>

            </span>
        </div>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/emails/orders/shipped.blade.php ENDPATH**/ ?>