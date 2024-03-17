<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/api/env-file-setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.env_file_setup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/api/env-file-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.delete_env_file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/api/run-migration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.run_migration',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/api/admin-config-setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.admin_config_setup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/api/smtp-config-setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installer.smtp_config_setup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ICN4IWRqawxLeVcv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget_password.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget_password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset_password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/orders/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/shipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sales/transactions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/attributes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/attributes/mass-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.mass_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/families' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/families/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/mass-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.mass_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/mass-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.mass_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/categories/tree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.tree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z06OZYpxuaYbu23X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/mass-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.mass_action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/mass-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.mass_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/mass-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.mass_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalog/products/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/customers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/customers/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/customers/mass-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.mass_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/customers/mass-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.mass_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.review.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.groups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/groups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customers/groups/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.groups.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/promotions/cart-rules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/promotions/cart-rules/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/promotions/catalog-rules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.catalog_rules.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/promotions/catalog-rules/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.catalog_rules.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.catalog_rules.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/email-templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.email_templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/email-templates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.email_templates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.email_templates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.events.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/events/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.events.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/events/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.events.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/campaigns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.campaigns.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/campaigns/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.campaigns.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.campaigns.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/subscribers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.subscribers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/communications/subscribers/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.subscribers.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/sitemaps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.sitemaps.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/sitemaps/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.sitemaps.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/marketing/sitemaps/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.sitemaps.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms/mass-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.mass_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.customers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/customers/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.customers.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/customers/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.customers.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/customers/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.customers.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/customers/view/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.customers.view.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/products/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.products.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/products/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.products.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/products/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.products.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/products/view/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.products.view.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.sales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/sales/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.sales.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/sales/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.sales.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/sales/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.sales.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reporting/sales/view/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reporting.sales.view.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/channels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.channels.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/channels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.channels.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.channels.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.currencies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/currencies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.currencies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/currencies/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.currencies.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/currencies/mass-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.currencies.mass_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/exchange-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.exchange_rates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/exchange-rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.exchange_rates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/exchange-rates/update-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.exchange_rates.update_rates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/exchange-rates/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.exchange_rates.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/locales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.locales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/locales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.locales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/locales/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.locales.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/inventory-sources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.inventory_sources.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/inventory-sources/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.inventory_sources.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.inventory_sources.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/taxes/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/taxes/categories/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.categories.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/taxes/rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.rates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/taxes/rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.rates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.rates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/taxes/rates/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.rates.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/users/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/users/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/themes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.themes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/themes/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.themes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/get-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.get_notification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/read-all-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.read_all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/datagrid/look-up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.datagrid.look_up',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tinymce/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tinymce.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.session.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/smart-button/create-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.smart-button.create-order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/smart-button/capture-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.smart-button.capture-order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/standard/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.standard.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.home.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.search.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.search.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.subscription.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/compare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.compare.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.forgot_password.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.forgot_password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.reset_password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customer.session.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customer.session.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.register.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.register.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/datagrid/look-up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customer.datagrid.look_up',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customer.session.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.wishlist.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.profile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/profile/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.profile.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/profile/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.profile.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/profile/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.reviews.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.addresses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/addresses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.addresses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.addresses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/account/downloadable-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.downloadable_products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.cart.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/onepage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/onepage/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/core/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.core.countries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/core/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.core.states',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories/tree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.categories.tree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.categories.attributes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/compare-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.compare.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.compare.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.compare.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/compare-items/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.compare.destroy_all',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart/selected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.destroy_selected',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart/move-to-wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.move_to_wishlist',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/cart/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.coupon.apply',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.checkout.cart.coupon.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/onepage/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.summary',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/onepage/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.addresses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/onepage/shipping-methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.shipping_methods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/onepage/payment-methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.payment_methods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/onepage/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/onepage/check-minimum-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.checkout.onepage.check_minimum_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shop.customers.account.addresses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.shop.customers.account.addresses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.customers.account.wishlist.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.customers.account.wishlist.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/wishlist/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.customers.account.wishlist.destroy_all',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/c(?|ache/([^/]++)/([ \\w\\.\\/\\-\\@\\(\\)\\=]+)(*:122)|ustomer/(?|rese(?|t\\-password/([^/]++)(*:168)|nd/verification/([^/]++)(*:200))|verify\\-account/([^/]++)(*:233)|account/(?|addresses/(?|edit/([^/]++)(?|(*:281))|delete/([^/]++)(*:305))|orders/(?|view/([^/]++)(*:337)|cancel/([^/]++)(*:360)|print/Invoice/([^/]++)(*:390))|downloadable\\-products/download/([^/]++)(*:439))|social\\-login/([^/]++)(?|(*:473)|/callback(*:490))))|/a(?|dmin/(?|reset\\-password/([^/]++)(*:538)|s(?|ales/(?|invoices/(?|create/([^/]++)(?|(*:588))|view/([^/]++)(*:610)|send\\-duplicate/([^/]++)(*:642)|print/([^/]++)(*:664)|([^/]+)transactions(*:691))|orders/(?|view/([^/]++)(*:723)|c(?|ancel/([^/]++)(*:749)|reate/([^/]++)(*:771)))|refunds/(?|create/([^/]++)(?|(*:810))|update\\-qty/([^/]++)(*:839)|view/([^/]++)(*:860))|shipments/(?|create/([^/]++)(?|(*:900))|view/([^/]++)(*:922))|transactions/view/([^/]++)(*:957))|ettings/(?|c(?|hannels/edit/([^/]++)(?|(*:1005))|urrencies/edit/([^/]++)(?|(*:1041)))|exchange\\-rates/edit/([^/]++)(?|(*:1084))|locales/edit/([^/]++)(?|(*:1118))|inventory\\-sources/edit/([^/]++)(?|(*:1163))|t(?|axes/(?|categories/edit/([^/]++)(?|(*:1212))|rates/edit/([^/]++)(?|(*:1244)))|hemes/edit/([^/]++)(?|(*:1277)))|roles/edit/([^/]++)(?|(*:1310))|users/edit/([^/]++)(?|(*:1342))))|c(?|atalog/(?|attributes/(?|([^/]++)/options(*:1398)|edit/([^/]++)(?|(*:1423)))|families/edit/([^/]++)(?|(*:1459))|categories/(?|edit/([^/]++)(?|(*:1499))|products/([^/]++)(*:1526))|products/(?|copy/([^/]++)(*:1561)|edit/([^/]++)(?|(*:1586)|/inventories(*:1607))|upload\\-(?|file/([^/]++)(*:1641)|sample/([^/]++)(*:1665))|([^/]++)/([^/]++)(*:1692)))|ustomers/(?|customers/(?|view/([^/]++)(*:1741)|edit/([^/]++)(?|(*:1766))|login\\-as\\-customer/([^/]++)(*:1804)|note/([^/]++)(*:1826)|([^/]++)(?|(*:1846)|/(?|orders(*:1865)|addresses(?|(*:1886)|/create(?|(*:1905)))))|addresses/(?|edit/([^/]++)(?|(*:1947))|de(?|fault/([^/]++)(*:1976)|lete/([^/]++)(*:1998))))|reviews/(?|edit/([^/]++)(?|(*:2037))|([^/]++)(*:2055)|mass\\-(?|delete(*:2079)|update(*:2094)))|groups/delete/([^/]++)(*:2127))|ms/edit/([^/]++)(?|(*:2156))|onfiguration(?|(?:/([^/]++)(?:/([^/]++))?)?(?|(*:2212))|/([^/]++)/([^/]++)/([^/]++)(*:2249)))|marketing/(?|promotions/ca(?|rt\\-rules/(?|co(?|py/([^/]++)(*:2318)|upons/(?|([^/]++)(?|(*:2347))|edit/([^/]++)(*:2370)|mass\\-delete(*:2391)))|edit/([^/]++)(?|(*:2418)))|talog\\-rules/edit/([^/]++)(?|(*:2458)))|communications/(?|e(?|mail\\-templates/edit/([^/]++)(?|(*:2523))|vents/edit/([^/]++)(?|(*:2555)))|campaigns/edit/([^/]++)(?|(*:2592))|subscribers/edit/([^/]++)(?|(*:2630)))|sitemaps/edit/([^/]++)(*:2663))|viewed\\-notifications/([^/]++)(*:2703))|pi/(?|c(?|ategories/max\\-price(?:/([^/]++))?(*:2757)|ustomer/wishlist/([^/]++)(?|/move\\-to\\-cart(*:2809)|(*:2818)))|product(?|s/([^/]++)/(?|related(*:2860)|up\\-sell(*:2877))|/([^/]++)/review(?|s(*:2907)|(*:2916)))))|/p(?|age/([^/]++)(*:2946)|roduct/([^/]++)/([^/]++)(*:2979))|/subscription/([^/]++)(*:3011)|/downloadable/download\\-sample/([^/]++)/([^/]++)(*:3068)|/(.*)(*:3082))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'imagecache',
          ),
          1 => 
          array (
            0 => 'template',
            1 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.reset_password.create',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.resend.verification_email',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.verify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.addresses.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.addresses.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.addresses.update.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.addresses.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.orders.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      360 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.orders.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.orders.print-invoice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.customers.account.downloadable_products.download',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.social-login.index',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.social-login.callback',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset_password.create',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.create',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.store',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.send_duplicate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.print',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.invoices.transactions',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      749 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.orders.comment',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.create',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.store',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.update_qty',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.refunds.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.create',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.store',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.shipments.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sales.transactions.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.channels.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.channels.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.channels.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.currencies.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.currencies.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.exchange_rates.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.exchange_rates.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.locales.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.locales.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.inventory_sources.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.inventory_sources.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.inventory_sources.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.categories.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.rates.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.rates.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.taxes.rates.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.themes.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.themes.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.themes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.roles.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.users.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.options',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.attributes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.families.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.categories.products',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.copy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.update_inventories',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.upload_link',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.upload_sample',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalog.products.file.download',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'attribute_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.login_as_customer',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.note.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.orders.data',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.addresses.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.addresses.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.addresses.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.addresses.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.addresses.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.addresses.set_default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.addresses.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.review.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.review.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.review.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.review.mass_delete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.customers.review.mass_update',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customers.groups.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configuration.index',
            'slug' => NULL,
            'slug2' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'slug2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configuration.store',
            'slug' => NULL,
            'slug2' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'slug2',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configuration.download',
            'slug' => NULL,
            'slug2' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'slug2',
            2 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.copy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.coupons.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.coupons.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.coupons.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.coupons.mass_delete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.cart_rules.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.catalog_rules.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.catalog_rules.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.catalog_rules.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.email_templates.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.email_templates.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.email_templates.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.events.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.events.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.campaigns.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.campaigns.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.campaigns.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.subscribers.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.communications.subscribers.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.marketing.promotions.sitemaps.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.viewed_notification',
          ),
          1 => 
          array (
            0 => 'orderId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.categories.max_price',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.customers.account.wishlist.move_to_cart',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.customers.account.wishlist.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.products.related.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.products.up-sell.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.products.reviews.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.api.products.reviews.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.cms.page',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.product.file.download',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'attribute_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.subscription.destroy',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.downloadable.download_sample',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.product_or_category.index',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'installer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'uses' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@index',
        'controller' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'installer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.env_file_setup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/api/env-file-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Illuminate\\Session\\Middleware\\StartSession',
        ),
        'uses' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@envFileSetup',
        'controller' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@envFileSetup',
        'namespace' => NULL,
        'prefix' => '/install/api',
        'where' => 
        array (
        ),
        'as' => 'installer.env_file_setup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.delete_env_file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/api/env-file-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Illuminate\\Session\\Middleware\\StartSession',
        ),
        'uses' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@envFileDelete',
        'controller' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@envFileDelete',
        'namespace' => NULL,
        'prefix' => '/install/api',
        'where' => 
        array (
        ),
        'as' => 'installer.delete_env_file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.run_migration' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/api/run-migration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Illuminate\\Session\\Middleware\\StartSession',
        ),
        'uses' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@runMigration',
        'controller' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@runMigration',
        'namespace' => NULL,
        'prefix' => '/install/api',
        'where' => 
        array (
        ),
        'as' => 'installer.run_migration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.admin_config_setup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/api/admin-config-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Illuminate\\Session\\Middleware\\StartSession',
        ),
        'uses' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@adminConfigSetup',
        'controller' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@adminConfigSetup',
        'namespace' => NULL,
        'prefix' => '/install/api',
        'where' => 
        array (
        ),
        'as' => 'installer.admin_config_setup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installer.smtp_config_setup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/api/smtp-config-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Illuminate\\Session\\Middleware\\StartSession',
        ),
        'uses' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@smtpConfigSetup',
        'controller' => 'Webkul\\Installer\\Http\\Controllers\\InstallerController@smtpConfigSetup',
        'namespace' => NULL,
        'prefix' => '/install/api',
        'where' => 
        array (
        ),
        'as' => 'installer.smtp_config_setup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'imagecache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cache/{template}/{filename}',
      'action' => 
      array (
        'uses' => 'Intervention\\Image\\ImageCacheController@getResponse',
        'as' => 'imagecache',
        'controller' => 'Intervention\\Image\\ImageCacheController@getResponse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'filename' => '[ \\w\\.\\/\\-\\@\\(\\)\\=]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ICN4IWRqawxLeVcv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Controller@redirectToLogin',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Controller@redirectToLogin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ICN4IWRqawxLeVcv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.session.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\SessionController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\SessionController@create',
        'namespace' => NULL,
        'prefix' => 'admin/login',
        'where' => 
        array (
        ),
        'as' => 'admin.session.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.session.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\SessionController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\SessionController@store',
        'namespace' => NULL,
        'prefix' => 'admin/login',
        'where' => 
        array (
        ),
        'as' => 'admin.session.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forget_password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\ForgetPasswordController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\ForgetPasswordController@create',
        'namespace' => NULL,
        'prefix' => 'admin/forget-password',
        'where' => 
        array (
        ),
        'as' => 'admin.forget_password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forget_password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\ForgetPasswordController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\ForgetPasswordController@store',
        'namespace' => NULL,
        'prefix' => 'admin/forget-password',
        'where' => 
        array (
        ),
        'as' => 'admin.forget_password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset_password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\ResetPasswordController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\ResetPasswordController@create',
        'namespace' => NULL,
        'prefix' => 'admin/reset-password',
        'where' => 
        array (
        ),
        'as' => 'admin.reset_password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset_password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\ResetPasswordController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\ResetPasswordController@store',
        'namespace' => NULL,
        'prefix' => 'admin/reset-password',
        'where' => 
        array (
        ),
        'as' => 'admin.reset_password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales/invoices',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales/invoices',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/invoices/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales/invoices',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.invoices.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales/invoices',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.invoices.send_duplicate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/invoices/send-duplicate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@sendDuplicate',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@sendDuplicate',
        'namespace' => NULL,
        'prefix' => 'admin/sales/invoices',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.send_duplicate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.invoices.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@printInvoice',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@printInvoice',
        'namespace' => NULL,
        'prefix' => 'admin/sales/invoices',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.print',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.invoices.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/invoices/{id}transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@invoiceTransactions',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\InvoiceController@invoiceTransactions',
        'namespace' => NULL,
        'prefix' => 'admin/sales/invoices',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.invoices.transactions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.orders.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/orders/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.orders.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/orders/cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@cancel',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@cancel',
        'namespace' => NULL,
        'prefix' => 'admin/sales/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.orders.comment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/orders/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@comment',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@comment',
        'namespace' => NULL,
        'prefix' => 'admin/sales/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.comment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.orders.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/orders/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@search',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\OrderController@search',
        'namespace' => NULL,
        'prefix' => 'admin/sales/orders',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.orders.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.refunds.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales/refunds',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.refunds.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/refunds/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales/refunds',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.refunds.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/refunds/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales/refunds',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.refunds.update_qty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/refunds/update-qty/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@updateQty',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@updateQty',
        'namespace' => NULL,
        'prefix' => 'admin/sales/refunds',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.update_qty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.refunds.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/refunds/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\RefundController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales/refunds',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.refunds.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.shipments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/shipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales/shipments',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.shipments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/shipments/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales/shipments',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.shipments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/shipments/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales/shipments',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.shipments.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/shipments/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\ShipmentController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales/shipments',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.shipments.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.transactions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@index',
        'namespace' => NULL,
        'prefix' => 'admin/sales/transactions',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.transactions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/transactions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@create',
        'namespace' => NULL,
        'prefix' => 'admin/sales/transactions',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.transactions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sales/transactions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@store',
        'namespace' => NULL,
        'prefix' => 'admin/sales/transactions',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sales.transactions.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sales/transactions/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Sales\\TransactionController@view',
        'namespace' => NULL,
        'prefix' => 'admin/sales/transactions',
        'where' => 
        array (
        ),
        'as' => 'admin.sales.transactions.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.options' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/attributes/{id}/options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@getAttributeOptions',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@getAttributeOptions',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.options',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/attributes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/attributes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/catalog/attributes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.attributes.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/attributes/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/attributes',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.attributes.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.families.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/families',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/families',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.families.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/families/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/families',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.families.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/families/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/families',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.families.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/families/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/families',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.families.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/families/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/families',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.families.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/catalog/families/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\AttributeFamilyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/families',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.families.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/catalog/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories/products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@products',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@products',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/categories/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.mass_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/categories/mass-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@massUpdate',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.mass_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@search',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@search',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.categories.tree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/categories/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@tree',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\CategoryController@tree',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.categories.tree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z06OZYpxuaYbu23X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@sync',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@sync',
        'namespace' => NULL,
        'prefix' => 'admin/catalog',
        'where' => 
        array (
        ),
        'as' => 'generated::Z06OZYpxuaYbu23X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@create',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/copy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@copy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@copy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.copy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/catalog/products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.update_inventories' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/catalog/products/edit/{id}/inventories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@updateInventories',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@updateInventories',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.update_inventories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.upload_link' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/upload-file/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@uploadLink',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@uploadLink',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.upload_link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.upload_sample' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/upload-sample/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@uploadSample',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@uploadSample',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.upload_sample',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.mass_action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/mass-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@massUpdate',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.mass_action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.mass_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/mass-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@massUpdate',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.mass_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalog/products/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@search',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@search',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.catalog.products.file.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalog/products/{id}/{attribute_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@download',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Catalog\\ProductController@download',
        'namespace' => NULL,
        'prefix' => 'admin/catalog/products',
        'where' => 
        array (
        ),
        'as' => 'admin.catalog.products.file.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'admin.catalog.products.edit',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@show',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@show',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@store',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@search',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@search',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.login_as_customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/login-as-customer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@login_as_customer',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@login_as_customer',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.login_as_customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.note.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/note/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@storeNotes',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@storeNotes',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.note.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/customers/customers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.mass_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/mass-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@massUpdate',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.mass_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.orders.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/{id}/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@orders',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerController@orders',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.orders.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/{id}/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers/{id}/addresses',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.addresses.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.addresses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/{id}/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@create',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers/{id}/addresses',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.addresses.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/{id}/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers/{id}/addresses',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.addresses.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.addresses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/customers/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers/addresses',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.addresses.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/customers/customers/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@update',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers/addresses',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.addresses.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.addresses.set_default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/addresses/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@makeDefault',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@makeDefault',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers/addresses',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.addresses.set_default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.addresses.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/customers/addresses/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/customers/customers/addresses',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.addresses.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => 'admin/customers/reviews',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.review.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/customers/reviews',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.review.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/customers/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@update',
        'namespace' => NULL,
        'prefix' => 'admin/customers/reviews',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.review.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.review.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/customers/reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/customers/reviews',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.review.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.review.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/reviews/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/customers/reviews',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.review.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.customers.review.mass_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/reviews/mass-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@massUpdate',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\ReviewController@massUpdate',
        'namespace' => NULL,
        'prefix' => 'admin/customers/reviews',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.customers.review.mass_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.groups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customers/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@index',
        'namespace' => NULL,
        'prefix' => 'admin/customers/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.groups.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customers/groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@store',
        'namespace' => NULL,
        'prefix' => 'admin/customers/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.groups.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/customers/groups/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@update',
        'namespace' => NULL,
        'prefix' => 'admin/customers/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.groups.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customers.groups.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/customers/groups/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Customers\\CustomerGroupController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/customers/groups',
        'where' => 
        array (
        ),
        'as' => 'admin.customers.groups.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@create',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.copy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/copy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@copy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@copy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.copy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.coupons.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/coupons/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules/coupons',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.coupons.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.coupons.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/coupons/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@store',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules/coupons',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.coupons.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.coupons.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/coupons/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules/coupons',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.coupons.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.cart_rules.coupons.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/promotions/cart-rules/coupons/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@massDelete',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CartRuleCouponController@massDelete',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/cart-rules/coupons',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.cart_rules.coupons.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.catalog_rules.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/catalog-rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/catalog-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.catalog_rules.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.catalog_rules.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/catalog-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@create',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/catalog-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.catalog_rules.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.catalog_rules.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/promotions/catalog-rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/catalog-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.catalog_rules.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.catalog_rules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/promotions/catalog-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/catalog-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.catalog_rules.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.catalog_rules.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marketing/promotions/catalog-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/catalog-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.catalog_rules.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.catalog_rules.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/promotions/catalog-rules/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Promotions\\CatalogRuleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/promotions/catalog-rules',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.catalog_rules.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.email_templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/email-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/email-templates',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.email_templates.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.email_templates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/email-templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@create',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/email-templates',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.email_templates.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.email_templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/communications/email-templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@store',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/email-templates',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.email_templates.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.email_templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/email-templates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/email-templates',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.email_templates.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.email_templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marketing/communications/email-templates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@update',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/email-templates',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.email_templates.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.email_templates.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/communications/email-templates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\TemplateController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/email-templates',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.email_templates.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.events.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/events',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.events.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.events.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/communications/events/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@store',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/events',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.events.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.events.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/events/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/events',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.events.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.events.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marketing/communications/events/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@update',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/events',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.events.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.events.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/communications/events/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/events',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.events.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.campaigns.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/campaigns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/campaigns',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.campaigns.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.campaigns.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/campaigns/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@create',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/campaigns',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.campaigns.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.campaigns.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/communications/campaigns/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@store',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/campaigns',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.campaigns.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.campaigns.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/campaigns/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/campaigns',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.campaigns.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.campaigns.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marketing/communications/campaigns/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@update',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/campaigns',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.campaigns.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.campaigns.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/communications/campaigns/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\CampaignController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/campaigns',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.campaigns.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.subscribers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/subscribers',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.subscribers.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.subscribers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/communications/subscribers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/subscribers',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.subscribers.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.subscribers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marketing/communications/subscribers/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@update',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/subscribers',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.subscribers.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.communications.subscribers.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/communications/subscribers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\Communications\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/communications/subscribers',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.communications.subscribers.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.sitemaps.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/marketing/sitemaps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@index',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/sitemaps',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.sitemaps.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.sitemaps.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/marketing/sitemaps/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@store',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/sitemaps',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.sitemaps.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.sitemaps.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/marketing/sitemaps/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@update',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/sitemaps',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.sitemaps.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.marketing.promotions.sitemaps.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/marketing/sitemaps/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Marketing\\SitemapController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/marketing/sitemaps',
        'where' => 
        array (
        ),
        'as' => 'admin.marketing.promotions.sitemaps.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@index',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@create',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@store',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/cms/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@update',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cms.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cms/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@delete',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@delete',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cms.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@massDelete',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\CMS\\PageController@massDelete',
        'namespace' => NULL,
        'prefix' => 'admin/cms',
        'where' => 
        array (
        ),
        'as' => 'admin.cms.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.customers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.customers.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.customers.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/customers/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@stats',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@stats',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.customers.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.customers.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/customers/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@export',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@export',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.customers.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.customers.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/customers/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@view',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.customers.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.customers.view.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/customers/view/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@viewStats',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\CustomerController@viewStats',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/customers',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.customers.view.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/products',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.products.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.products.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/products/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@stats',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@stats',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/products',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.products.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.products.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/products/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@export',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@export',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/products',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.products.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.products.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/products/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@view',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/products',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.products.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.products.view.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/products/view/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@viewStats',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\ProductController@viewStats',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/products',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.products.view.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.sales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.sales.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.sales.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/sales/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@stats',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@stats',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.sales.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.sales.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/sales/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@export',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@export',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.sales.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.sales.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/sales/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@view',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@view',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.sales.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reporting.sales.view.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reporting/sales/view/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@viewStats',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Reporting\\SaleController@viewStats',
        'namespace' => NULL,
        'prefix' => 'admin/reporting/sales',
        'where' => 
        array (
        ),
        'as' => 'admin.reporting.sales.view.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.channels.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/channels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/channels',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.channels.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.channels.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/channels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@create',
        'namespace' => NULL,
        'prefix' => 'admin/settings/channels',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.channels.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.channels.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/channels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/channels',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.channels.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.channels.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/channels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/channels',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.channels.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.channels.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/channels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/channels',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.channels.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.channels.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/channels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ChannelController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/channels',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.channels.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/currencies',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.currencies.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.currencies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/currencies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/currencies',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.currencies.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.currencies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/currencies/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/currencies',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.currencies.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.currencies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/currencies/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/currencies',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.currencies.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.currencies.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/currencies/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/currencies',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.currencies.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.currencies.mass_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/currencies/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@massDestroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\CurrencyController@massDestroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/currencies',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.currencies.mass_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.exchange_rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/exchange-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/exchange-rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.exchange_rates.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.exchange_rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/exchange-rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/exchange-rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.exchange_rates.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.exchange_rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/exchange-rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/exchange-rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.exchange_rates.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.exchange_rates.update_rates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/exchange-rates/update-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@updateRates',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@updateRates',
        'namespace' => NULL,
        'prefix' => 'admin/settings/exchange-rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.exchange_rates.update_rates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.exchange_rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/exchange-rates/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/exchange-rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.exchange_rates.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.exchange_rates.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/exchange-rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ExchangeRateController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/exchange-rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.exchange_rates.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.locales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/locales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/locales',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.locales.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.locales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/locales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/locales',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.locales.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.locales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/locales/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/locales',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.locales.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.locales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/locales/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/locales',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.locales.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.locales.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/locales/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\LocaleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/locales',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.locales.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.inventory_sources.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/inventory-sources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/inventory-sources',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.inventory_sources.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.inventory_sources.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/inventory-sources/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@create',
        'namespace' => NULL,
        'prefix' => 'admin/settings/inventory-sources',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.inventory_sources.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.inventory_sources.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/inventory-sources/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/inventory-sources',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.inventory_sources.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.inventory_sources.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/inventory-sources/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/inventory-sources',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.inventory_sources.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.inventory_sources.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/inventory-sources/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/inventory-sources',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.inventory_sources.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.inventory_sources.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/inventory-sources/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\InventorySourceController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/inventory-sources',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.inventory_sources.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/taxes/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/taxes/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.categories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/taxes/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/taxes/categories/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.categories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.categories.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/taxes/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.categories.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/taxes/rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.rates.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.rates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/taxes/rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@show',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@show',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.rates.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/taxes/rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@create',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.rates.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/taxes/rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.rates.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/taxes/rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.rates.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.rates.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/taxes/rates/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.rates.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.taxes.rates.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/taxes/rates/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@import',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\Tax\\TaxRateController@import',
        'namespace' => NULL,
        'prefix' => 'admin/settings/taxes/rates',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.taxes.rates.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@create',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@create',
        'namespace' => NULL,
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.roles.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.roles.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/users/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/users/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@destroySelf',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\UserController@destroySelf',
        'namespace' => NULL,
        'prefix' => 'admin/settings/users',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.users.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.themes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/themes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/themes',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.themes.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.themes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/themes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/settings/themes',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.themes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.themes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/themes/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/themes',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.themes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.themes.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/themes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/themes',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.themes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.themes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/themes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\Settings\\ThemeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/themes',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.themes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.configuration.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/configuration/{slug?}/{slug2?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@index',
        'namespace' => NULL,
        'prefix' => 'admin/configuration/{slug?}/{slug2?}',
        'where' => 
        array (
        ),
        'as' => 'admin.configuration.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.configuration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/configuration/{slug?}/{slug2?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@store',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@store',
        'namespace' => NULL,
        'prefix' => 'admin/configuration/{slug?}/{slug2?}',
        'where' => 
        array (
        ),
        'as' => 'admin.configuration.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.configuration.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/configuration/{slug?}/{slug2?}/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@download',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\ConfigurationController@download',
        'namespace' => NULL,
        'prefix' => 'admin/configuration/{slug?}/{slug2?}',
        'where' => 
        array (
        ),
        'as' => 'admin.configuration.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'admin.configuration.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.get_notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get-notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@getNotifications',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@getNotifications',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.get_notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.viewed_notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewed-notifications/{orderId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@viewedNotifications',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@viewedNotifications',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.viewed_notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.read_all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/read-all-notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@readAllNotifications',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\NotificationController@readAllNotifications',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.read_all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\DashboardController@index',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.datagrid.look_up' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/datagrid/look-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\DataGridController@lookUp',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\DataGridController@lookUp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.datagrid.look_up',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tinymce.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tinymce/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\TinyMCEController@upload',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\TinyMCEController@upload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tinymce.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\AccountController@edit',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\AccountController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/account',
        'where' => 
        array (
        ),
        'as' => 'admin.account.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\AccountController@update',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\AccountController@update',
        'namespace' => NULL,
        'prefix' => 'admin/account',
        'where' => 
        array (
        ),
        'as' => 'admin.account.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.session.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Webkul\\Admin\\Http\\Controllers\\User\\SessionController@destroy',
        'controller' => 'Webkul\\Admin\\Http\\Controllers\\User\\SessionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.session.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.standard.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/standard/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@redirect',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@redirect',
        'namespace' => NULL,
        'prefix' => '/paypal/standard',
        'where' => 
        array (
        ),
        'as' => 'paypal.standard.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.standard.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/standard/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@success',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@success',
        'namespace' => NULL,
        'prefix' => '/paypal/standard',
        'where' => 
        array (
        ),
        'as' => 'paypal.standard.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.standard.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/standard/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@cancel',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@cancel',
        'namespace' => NULL,
        'prefix' => '/paypal/standard',
        'where' => 
        array (
        ),
        'as' => 'paypal.standard.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.smart-button.create-order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/smart-button/create-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@createOrder',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@createOrder',
        'namespace' => NULL,
        'prefix' => '/paypal/smart-button',
        'where' => 
        array (
        ),
        'as' => 'paypal.smart-button.create-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.smart-button.capture-order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paypal/smart-button/capture-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@captureOrder',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\SmartButtonController@captureOrder',
        'namespace' => NULL,
        'prefix' => '/paypal/smart-button',
        'where' => 
        array (
        ),
        'as' => 'paypal.smart-button.capture-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.standard.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paypal/standard/ipn',
      'action' => 
      array (
        'uses' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@ipn',
        'controller' => 'Webkul\\Paypal\\Http\\Controllers\\StandardController@ipn',
        'excluded_middleware' => 
        array (
          0 => 'App\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'paypal.standard.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.cms.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'cacheResponse',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CMS\\PagePresenterController@presenter',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CMS\\PagePresenterController@presenter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.cms.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.product_or_category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'cacheResponse',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ProductsCategoriesProxyController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ProductsCategoriesProxyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.product_or_category.index',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.home.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'cacheResponse',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\HomeController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.home.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.search.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'cacheResponse',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\SearchController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.search.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.search.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\SearchController@upload',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\SearchController@upload',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.search.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.subscription.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.subscription.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.subscription.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscription/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.subscription.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.compare.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'compare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'cacheResponse',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CompareController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CompareController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.compare.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.downloadable.download_sample' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'downloadable/download-sample/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@downloadSample',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@downloadSample',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.downloadable.download_sample',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.product.file.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{id}/{attribute_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@download',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\ProductController@download',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.product.file.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'view' => 'shop.products.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.forgot_password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ForgotPasswordController@create',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ForgotPasswordController@create',
        'namespace' => NULL,
        'prefix' => 'customer/forgot-password',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.forgot_password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.forgot_password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ForgotPasswordController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ForgotPasswordController@store',
        'namespace' => NULL,
        'prefix' => 'customer/forgot-password',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.forgot_password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.reset_password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ResetPasswordController@create',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ResetPasswordController@create',
        'namespace' => NULL,
        'prefix' => 'customer/reset-password',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.reset_password.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.reset_password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ResetPasswordController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\ResetPasswordController@store',
        'namespace' => NULL,
        'prefix' => 'customer/reset-password',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.reset_password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customer.session.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\SessionController@show',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\SessionController@show',
        'namespace' => NULL,
        'prefix' => 'customer/login',
        'where' => 
        array (
        ),
        'as' => 'shop.customer.session.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customer.session.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\SessionController@create',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\SessionController@create',
        'namespace' => NULL,
        'prefix' => 'customer/login',
        'where' => 
        array (
        ),
        'as' => 'shop.customer.session.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.register.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@index',
        'namespace' => NULL,
        'prefix' => 'customer/register',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.register.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.register.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@store',
        'namespace' => NULL,
        'prefix' => 'customer/register',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.register.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/verify-account/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@verifyAccount',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@verifyAccount',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.resend.verification_email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/resend/verification/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@resendVerificationEmail',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\RegistrationController@resendVerificationEmail',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.resend.verification_email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customer.datagrid.look_up' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/datagrid/look-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\DataGridController@lookUp',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\DataGridController@lookUp',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'shop.customer.datagrid.look_up',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customer.session.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\SessionController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\SessionController@destroy',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'shop.customer.session.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        '_config' => 
        array (
          'redirect' => 'shop.customer.session.index',
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.wishlist.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\WishlistController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\WishlistController@index',
        'namespace' => NULL,
        'prefix' => '/customer',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.wishlist.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account/profile',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.profile.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@edit',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => 'customer/account/profile',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@update',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => 'customer/account/profile',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.profile.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/profile/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => 'customer/account/profile',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.profile.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/profile/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@reviews',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\CustomerController@reviews',
        'namespace' => NULL,
        'prefix' => 'customer/account/profile',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.reviews.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account/addresses',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.addresses.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.addresses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@create',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@create',
        'namespace' => NULL,
        'prefix' => 'customer/account/addresses',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.addresses.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'customer/account/addresses',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.addresses.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.addresses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@edit',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => 'customer/account/addresses',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.addresses.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/account/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@update',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@update',
        'namespace' => NULL,
        'prefix' => 'customer/account/addresses',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.addresses.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.addresses.update.default' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'customer/account/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@makeDefault',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@makeDefault',
        'namespace' => NULL,
        'prefix' => 'customer/account/addresses',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.addresses.update.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.addresses.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/account/addresses/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'customer/account/addresses',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.addresses.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account/orders',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.orders.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.orders.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/orders/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@view',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@view',
        'namespace' => NULL,
        'prefix' => 'customer/account/orders',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.orders.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.orders.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/account/orders/cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@cancel',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@cancel',
        'namespace' => NULL,
        'prefix' => 'customer/account/orders',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.orders.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.orders.print-invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/orders/print/Invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@printInvoice',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\OrderController@printInvoice',
        'namespace' => NULL,
        'prefix' => 'customer/account/orders',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.orders.print-invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.downloadable_products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/downloadable-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\DownloadableProductController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\DownloadableProductController@index',
        'namespace' => NULL,
        'prefix' => 'customer/account/downloadable-products',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.downloadable_products.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.customers.account.downloadable_products.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/account/downloadable-products/download/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\DownloadableProductController@download',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\Customer\\Account\\DownloadableProductController@download',
        'namespace' => NULL,
        'prefix' => 'customer/account/downloadable-products',
        'where' => 
        array (
        ),
        'as' => 'shop.customers.account.downloadable_products.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.cart.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\CartController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\CartController@index',
        'namespace' => NULL,
        'prefix' => '/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.cart.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/onepage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@index',
        'namespace' => NULL,
        'prefix' => '/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/onepage/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@success',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\OnepageController@success',
        'namespace' => NULL,
        'prefix' => '/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.core.countries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/core/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CoreController@getCountries',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CoreController@getCountries',
        'namespace' => NULL,
        'prefix' => 'api/core',
        'where' => 
        array (
        ),
        'as' => 'shop.api.core.countries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.core.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/core/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CoreController@getStates',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CoreController@getStates',
        'namespace' => NULL,
        'prefix' => 'api/core',
        'where' => 
        array (
        ),
        'as' => 'shop.api.core.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api/categories',
        'where' => 
        array (
        ),
        'as' => 'shop.api.categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.categories.tree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@tree',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@tree',
        'namespace' => NULL,
        'prefix' => 'api/categories',
        'where' => 
        array (
        ),
        'as' => 'shop.api.categories.tree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.categories.attributes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@getAttributes',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@getAttributes',
        'namespace' => NULL,
        'prefix' => 'api/categories',
        'where' => 
        array (
        ),
        'as' => 'shop.api.categories.attributes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.categories.max_price' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/max-price/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@getProductMaxPrice',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CategoryController@getProductMaxPrice',
        'namespace' => NULL,
        'prefix' => 'api/categories',
        'where' => 
        array (
        ),
        'as' => 'shop.api.categories.max_price',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\ProductController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'shop.api.products.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.products.related.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{id}/related',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\ProductController@relatedProducts',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\ProductController@relatedProducts',
        'namespace' => NULL,
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'shop.api.products.related.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.products.up-sell.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{id}/up-sell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\ProductController@upSellProducts',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\ProductController@upSellProducts',
        'namespace' => NULL,
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'shop.api.products.up-sell.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.products.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/{id}/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\ReviewController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => 'api/product/{id}',
        'where' => 
        array (
        ),
        'as' => 'shop.api.products.reviews.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.products.reviews.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/{id}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\ReviewController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\ReviewController@store',
        'namespace' => NULL,
        'prefix' => 'api/product/{id}',
        'where' => 
        array (
        ),
        'as' => 'shop.api.products.reviews.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.compare.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/compare-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@index',
        'namespace' => NULL,
        'prefix' => 'api/compare-items',
        'where' => 
        array (
        ),
        'as' => 'shop.api.compare.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.compare.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/compare-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@store',
        'namespace' => NULL,
        'prefix' => 'api/compare-items',
        'where' => 
        array (
        ),
        'as' => 'shop.api.compare.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.compare.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/compare-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/compare-items',
        'where' => 
        array (
        ),
        'as' => 'shop.api.compare.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.compare.destroy_all' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/compare-items/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@destroyAll',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CompareController@destroyAll',
        'namespace' => NULL,
        'prefix' => 'api/compare-items',
        'where' => 
        array (
        ),
        'as' => 'shop.api.compare.destroy_all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@index',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@store',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@update',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@update',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/checkout/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.destroy_selected' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/checkout/cart/selected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@destroySelected',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@destroySelected',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.destroy_selected',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.move_to_wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/cart/move-to-wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@moveToWishlist',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@moveToWishlist',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.move_to_wishlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.coupon.apply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/cart/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@storeCoupon',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@storeCoupon',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.coupon.apply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.checkout.cart.coupon.remove' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/checkout/cart/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@destroyCoupon',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\CartController@destroyCoupon',
        'namespace' => NULL,
        'prefix' => 'api/checkout/cart',
        'where' => 
        array (
        ),
        'as' => 'shop.api.checkout.cart.coupon.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.summary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout/onepage/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@summary',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@summary',
        'namespace' => NULL,
        'prefix' => 'api/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.summary',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/onepage/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storeAddress',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storeAddress',
        'namespace' => NULL,
        'prefix' => 'api/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.addresses.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.shipping_methods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/onepage/shipping-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storeShippingMethod',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storeShippingMethod',
        'namespace' => NULL,
        'prefix' => 'api/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.shipping_methods.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.payment_methods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/onepage/payment-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storePaymentMethod',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storePaymentMethod',
        'namespace' => NULL,
        'prefix' => 'api/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.payment_methods.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/onepage/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storeOrder',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@storeOrder',
        'namespace' => NULL,
        'prefix' => 'api/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.orders.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.checkout.onepage.check_minimum_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout/onepage/check-minimum-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@checkMinimumOrder',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\OnepageController@checkMinimumOrder',
        'namespace' => NULL,
        'prefix' => 'api/checkout/onepage',
        'where' => 
        array (
        ),
        'as' => 'shop.checkout.onepage.check_minimum_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shop.customers.account.addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\AddressController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'api/customer/addresses',
        'where' => 
        array (
        ),
        'as' => 'api.shop.customers.account.addresses.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shop.customers.account.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\AddressController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'api/customer/addresses',
        'where' => 
        array (
        ),
        'as' => 'api.shop.customers.account.addresses.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.customers.account.wishlist.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customer/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@index',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@index',
        'namespace' => NULL,
        'prefix' => 'api/customer/wishlist',
        'where' => 
        array (
        ),
        'as' => 'shop.api.customers.account.wishlist.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.customers.account.wishlist.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@store',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@store',
        'namespace' => NULL,
        'prefix' => 'api/customer/wishlist',
        'where' => 
        array (
        ),
        'as' => 'shop.api.customers.account.wishlist.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.customers.account.wishlist.move_to_cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/wishlist/{id}/move-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@moveToCart',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@moveToCart',
        'namespace' => NULL,
        'prefix' => 'api/customer/wishlist',
        'where' => 
        array (
        ),
        'as' => 'shop.api.customers.account.wishlist.move_to_cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.customers.account.wishlist.destroy_all' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/customer/wishlist/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@destroyAll',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@destroyAll',
        'namespace' => NULL,
        'prefix' => 'api/customer/wishlist',
        'where' => 
        array (
        ),
        'as' => 'shop.api.customers.account.wishlist.destroy_all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.api.customers.account.wishlist.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/customer/wishlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
          4 => 'customer',
        ),
        'uses' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@destroy',
        'controller' => 'Webkul\\Shop\\Http\\Controllers\\API\\WishlistController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/customer/wishlist',
        'where' => 
        array (
        ),
        'as' => 'shop.api.customers.account.wishlist.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.social-login.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/social-login/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@redirectToProvider',
        'controller' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => '/customer/social-login/{provider}',
        'where' => 
        array (
        ),
        'as' => 'customer.social-login.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.social-login.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/social-login/{provider}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'locale',
          2 => 'theme',
          3 => 'currency',
        ),
        'uses' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@handleProviderCallback',
        'controller' => 'Webkul\\SocialLogin\\Http\\Controllers\\LoginController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => '/customer/social-login/{provider}',
        'where' => 
        array (
        ),
        'as' => 'customer.social-login.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
