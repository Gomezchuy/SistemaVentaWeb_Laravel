<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        
        <style type="text/css">
            @font-face {
                font-family: 'Hind';
                src: url(<?php echo e(asset('vendor/webkul/ui/assets/fonts/Hind/Hind-Regular.ttf')); ?>) format('truetype');
            }

            @font-face {
                font-family: 'Noto Sans';
                src: url(<?php echo e(asset('vendor/webkul/ui/assets/fonts/Noto/NotoSans-Regular.ttf')); ?>) format('truetype');
            }
        </style>

        <?php
            /* main font will be set on locale based */
            $mainFontFamily = app()->getLocale() === 'ar' ? 'DejaVu Sans' : 'Noto Sans';
        ?>

        
        <style type="text/css">
            * {
                font-family: '<?php echo e($mainFontFamily); ?>';
            }

            body, th, td, h5 {
                font-size: 12px;
                color: #000;
            }

            .container {
                padding: 20px;
                display: block;
            }

            .invoice-summary {
                margin-bottom: 20px;
            }

            .table {
                margin: 20px 6px 0px 6px;
                border-spacing: 0px 0px 15px 0px;
            }

            .table table {
                width: 100%;
                border-collapse: collapse;
                text-align: left;
                table-layout: fixed;
            }

            .table thead th {
                font-weight: 700;
                border-top: solid 1px #d3d3d3;
                border-bottom: solid 1px #d3d3d3;
                border-left: solid 1px #d3d3d3;
                padding: 5px 12px;
                background: #005aff0d;
            }

            .table thead th:last-child {
                border-right: solid 1px #d3d3d3;
            }

            .table tbody td {
                padding: 5px 10px;
                color: #3A3A3A;
                vertical-align: middle;
                border-bottom: solid 1px #d3d3d3;
            }

            .table tbody td, p {
                margin: 0;
                color: #000;
            }

            .sale-summary {
                margin-top: 20px;
                float: right;
                background-color: #005aff0d;
            }

            .sale-summary tr td {
                padding: 3px 5px;
            }

            .sale-summary tr.bold {
                font-weight: 700;
            }

            .label {
                color: #000;
                font-weight: bold;
            }

            .logo {
                height: 70px;
                width: 70px;
            }

            .merchant-details {
                margin-bottom: 5px;
            }

            .merchant-details-title {
                font-weight: bold;
            }

            .text-center {
                text-align: center;
            }

            .col-6 {
                width: 42%;
                display: inline-block;
                vertical-align: top;
                margin: 0px 5px;
            }

            .table-header {
                color: #0041FF;
            }

            .align-left {
                text-align: left;
            }

            .invoice-text {
                font-size: 40px; 
                color: #3c41ff; 
                font-weight: bold;
                position: absolute; 
                width: 100%; 
                left: 0;
                text-align: center;
                top: -6px;
            }

            .without_logo {
                height: 35px;
                width: 35px;
            }
            
            .header {
                padding: 0px 2px;
                width: 100%;
                position: relative;
                border-bottom: solid 1px #d3d3d3;
                padding-bottom: 20px;
            }
        </style>
    </head>

    <body style="background-image: none; background-color: #fff;">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-12 header">
                        <?php if(core()->getConfigData('sales.invoice_settings.invoice_slip_design.logo')): ?>
                            <div class="image" style="display:inline-block; vertical-align: middle; padding-top:8px">
                                <img class="logo" src="<?php echo e(Storage::url(core()->getConfigData('sales.invoice_settings.invoice_slip_design.logo'))); ?>" alt=""/>
                            </div>
                        <?php else: ?>
                            <div class="without_logo" style="display:inline-block; vertical-align: middle; padding-top:8px">
                            </div>
                        <?php endif; ?>
                        <div class="invoice-text">
                            <span><?php echo e(strtoupper(__('admin::app.sales.invoices.invoice-pdf.invoice'))); ?></span>
                        </div>
                    </div>
                </div>

                <div class="row" style="padding: 5px">
                    <div class="col-12">
                        <div class="col-6">
                            <div class="merchant-details">
                                <div class="row">
                                    <span class="label"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.invoice-id'); ?>: </span>
                                    <span class="value">#<?php echo e($invoice->increment_id ?? $invoice->id); ?></span>
                                </div>

                                <div class="row">
                                    <span class="label"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.date'); ?>: </span>
                                    <span class="value"><?php echo e(core()->formatDate($invoice->created_at, 'd-m-Y')); ?></span>
                                </div>

                                <div style="padding-top: 20px">
                                    <span class="merchant-details-title"><?php echo e(core()->getConfigData('sales.shipping.origin.store_name') ? core()->getConfigData('sales.shipping.origin.store_name') : ''); ?></span>
                                </div>

                                <div><?php echo e(core()->getConfigData('sales.shipping.origin.address1') ?? ''); ?></div>

                                <div>
                                    <span><?php echo e(core()->getConfigData('sales.shipping.origin.zipcode') ?? ''); ?></span>
                                    <span><?php echo e(core()->getConfigData('sales.shipping.origin.city') ?? ''); ?></span>
                                </div>

                                <div><?php echo e(core()->getConfigData('sales.shipping.origin.state') ?? ''); ?></div>

                                <div><?php echo e(core()->getConfigData('sales.shipping.origin.country') ?? ''); ?></div>
                            </div>
                            <div class="merchant-details">
                                <?php if(core()->getConfigData('sales.shipping.origin.contact')): ?>
                                    <div><span class="merchant-details-title"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.contact-number'); ?>: </span> <?php echo e(core()->getConfigData('sales.shipping.origin.contact')); ?></div>
                                <?php endif; ?>

                                <?php if(core()->getConfigData('sales.shipping.origin.vat_number')): ?>
                                    <div><span class="merchant-details-title"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.vat-number'); ?>: </span> <?php echo e(core()->getConfigData('sales.shipping.origin.vat_number')); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-6" style="padding-left: 80px">
                            <div class="row">
                                <span class="label"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.order-id'); ?>: </span>
                                <span class="value">#<?php echo e($invoice->order->increment_id); ?></span>
                            </div>
                           
                            <div class="row">
                                <span class="label"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.order-date'); ?>: </span>
                                <span class="value"><?php echo e(core()->formatDate($invoice->order->created_at, 'd-m-Y')); ?></span>
                            </div>

                            <?php if($invoice->hasPaymentTerm()): ?>
                                <div class="row">
                                    <span class="label"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.payment-terms'); ?> -</span>
                                    <span class="value"><?php echo e($invoice->getFormattedPaymentTerm()); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if(core()->getConfigData('sales.shipping.origin.bank_details')): ?>
                                <div class="row" style="padding-top: 20px">
                                    <span class="merchant-details-title">
                                        <?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.bank-details'); ?>:
                                    </span> 
                                    <div><?php echo e(core()->getConfigData('sales.shipping.origin.bank_details')); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="invoice-summary">
                <div class="table address">
                    <table>
                        <thead>
                            <tr>
                                <th class="table-header align-left" style="width: 50%;"><?php echo e(ucwords(trans('admin::app.sales.invoices.invoice-pdf.bill-to'))); ?></th>
                                <?php if($invoice->order->shipping_address): ?>
                                    <th class="table-header align-left"><?php echo e(ucwords(trans('admin::app.sales.invoices.invoice-pdf.ship-to'))); ?></th>
                                <?php endif; ?>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <?php if($invoice->order->billing_address): ?>
                                    <td>
                                        <p><?php echo e($invoice->order->billing_address->company_name ?? ''); ?></p>
                                        <p><?php echo e($invoice->order->billing_address->name); ?></p>
                                        <p><?php echo e($invoice->order->billing_address->address1); ?></p>
                                        <p><?php echo e($invoice->order->billing_address->postcode . ' ' .$invoice->order->billing_address->city); ?> </p>
                                        <p><?php echo e($invoice->order->billing_address->state); ?></p>
                                        <p><?php echo e(core()->country_name($invoice->order->billing_address->country)); ?></p>
                                        <?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.contact'); ?> : <?php echo e($invoice->order->billing_address->phone); ?>

                                    </td>
                                <?php endif; ?>

                                <?php if($invoice->order->shipping_address): ?>
                                    <td>
                                        <p><?php echo e($invoice->order->shipping_address->company_name ?? ''); ?></p>
                                        <p><?php echo e($invoice->order->shipping_address->name); ?></p>
                                        <p><?php echo e($invoice->order->shipping_address->address1); ?></p>
                                        <p><?php echo e($invoice->order->shipping_address->postcode . ' ' . $invoice->order->shipping_address->city); ?></p>
                                        <p><?php echo e($invoice->order->shipping_address->state); ?></p>
                                        <p><?php echo e(core()->country_name($invoice->order->shipping_address->country)); ?></p>
                                        <?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.contact'); ?> }} : <?php echo e($invoice->order->shipping_address->phone); ?>

                                    </td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table payment-shipment">
                    <table>
                        <thead>
                            <tr>
                                <th class="table-header align-left" style="width: 50%;"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.payment-method'); ?></th>

                                <?php if($invoice->order->shipping_address): ?>
                                    <th class="table-header align-left"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.shipping-method'); ?></th>
                                <?php endif; ?>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <?php echo e(core()->getConfigData('sales.payment_methods.' . $invoice->order->payment->method . '.title')); ?>


                                    <?php $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($invoice->order->payment->method); ?>

                                    <?php if(! empty($additionalDetails)): ?>
                                        <div>
                                            <label class="label"><?php echo e($additionalDetails['title']); ?>:</label>
                                            <p class="value"><?php echo e($additionalDetails['value']); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </td>

                                <?php if($invoice->order->shipping_address): ?>
                                    <td>
                                        <?php echo e($invoice->order->shipping_title); ?>

                                    </td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table items">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center table-header"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.sku'); ?></th>
                                <th class="text-center table-header"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.product-name'); ?></th>
                                <th class="text-center table-header"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.price'); ?></th>
                                <th class="text-center table-header"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.qty'); ?></th>
                                <th class="text-center table-header"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.subtotal'); ?></th>
                                <th class="text-center table-header"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.tax-amount'); ?></th>
                                <th class="text-center table-header"><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.grand-total'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $invoice->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($item->getTypeInstance()->getOrderedItem($item)->sku); ?></td>

                                    <td class="text-center">
                                        <?php echo e($item->name); ?>


                                        <?php if(isset($item->additional['attributes'])): ?>
                                            <div class="item-options">

                                                <?php $__currentLoopData = $item->additional['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <b><?php echo e($attribute['attribute_name']); ?> : </b><?php echo e($attribute['option_label']); ?></br>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                        <?php endif; ?>
                                    </td>

                                    <td class="text-center"><?php echo core()->formatBasePrice($item->base_price, true); ?></td>

                                    <td class="text-center"><?php echo e($item->qty); ?></td>

                                    <td class="text-center"><?php echo core()->formatBasePrice($item->base_total, true); ?></td>

                                    <td class="text-center"><?php echo core()->formatBasePrice($item->base_tax_amount, true); ?></td>

                                    <td class="text-center"><?php echo core()->formatBasePrice($item->base_total + $item->base_tax_amount, true); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <table class="sale-summary">
                    <tr>
                        <td><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.subtotal'); ?></td>
                        <td>-</td>
                        <td><?php echo core()->formatBasePrice($invoice->base_sub_total, true); ?></td>
                    </tr>

                    <tr>
                        <td><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.shipping-handling'); ?></td>
                        <td>-</td>
                        <td><?php echo core()->formatBasePrice($invoice->base_shipping_amount, true); ?></td>
                    </tr>

                    <tr>
                        <td><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.tax'); ?></td>
                        <td>-</td>
                        <td><?php echo core()->formatBasePrice($invoice->base_tax_amount, true); ?></td>
                    </tr>

                    <tr>
                        <td><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.discount'); ?></td>
                        <td>-</td>
                        <td><?php echo core()->formatBasePrice($invoice->base_discount_amount, true); ?></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td><?php echo app('translator')->get('admin::app.sales.invoices.invoice-pdf.grand-total'); ?></td>
                        <td>-</td>
                        <td><?php echo core()->formatBasePrice($invoice->base_grand_total, true); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/sales/invoices/pdf.blade.php ENDPATH**/ ?>