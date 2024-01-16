export default [
    {
        path: "/admin/dashboard",
        name: "admin.dashboard",
        component: () => import("../../views/admin/Dashboard.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    /* GROUP ORDER - ORDERGR */
    {
        path: "/admin/order/index",
        name: "admin.order.index",
        component: () => import("../../views/admin/order/OrderIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/order/detail/:id",
        name: "admin.order.detail",
        component: () => import("../../views/admin/order/OrderDetail.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    /* GROUP PRODUCT - PRODUCTGR */
    {
        path: "/admin/product/index",
        name: "admin.product.index",
        component: () => import("../../views/admin/product/ProductIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    
    /* GROUP ADS - ADSGR */
    {
        path: "/admin/ads/index",
        name: "admin.ads.index",
        component: () => import("../../views/admin/ads/AdsIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/ads/form",
        name: "admin.ads.form",
        component: () => import("../../views/admin/ads/AdsForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/ads/edit/:id",
        name: "admin.ads.edit",
        component: () => import("../../views/admin/ads/AdsForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    /* GROUP USER - USERGR */
    {
        path: "/admin/user/index",
        name: "admin.user.index",
        component: () => import("../../views/admin/user/UserIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/user/detail/:id",
        name: "admin.user.detail",
        component: () => import("../../views/admin/user/UserDetail.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    /* GROUP ADMIN - ADMINGR */
    {
        path: "/admin/admin/index",
        name: "admin.admin.index",
        component: () => import("../../views/admin/admin/AdminIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/admin/form",
        name: "admin.admin.form",
        component: () => import("../../views/admin/admin/AdminForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/admin/edit/:id",
        name: "admin.admin.edit",
        component: () => import("../../views/admin/admin/AdminForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    /* GROUP CATEGORY - CATEGORYGR */
    {
        path: "/admin/category/index",
        name: "admin.category.index",
        component: () => import("../../views/admin/category/CategoryIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/category/form",
        name: "admin.category.form",
        component: () => import("../../views/admin/category/CategoryForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/category/edit/:id",
        name: "admin.category.edit",
        component: () => import("../../views/admin/category/CategoryForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    
    {
        path: "/admin/sub-category/index",
        name: "admin.sub-category.index",
        component: () => import("../../views/admin/sub-category/SubCategoryIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/sub-category/form",
        name: "admin.sub-category.form",
        component: () => import("../../views/admin/sub-category/SubCategoryForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/sub-category/edit/:id",
        name: "admin.sub-category.edit",
        component: () => import("../../views/admin/sub-category/SubCategoryForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },

    {
        path: "/admin/setting/index",
        name: "admin.setting.index",
        component: () => import("../../views/admin/setting/SettingIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/setting/form",
        name: "admin.setting.form",
        component: () => import("../../views/admin/setting/SettingForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/setting/edit/:id",
        name: "admin.setting.edit",
        component: () => import("../../views/admin/setting/SettingForm.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },

    {
        path: "/admin/refund/index",
        name: "admin.refund.index",
        component: () => import("../../views/admin/refund/RefundIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/refund/detail/:id",
        name: "admin.refund.detail",
        component: () => import("../../views/admin/refund/RefundDetail.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },

    {
        path: "/admin/complaint/index",
        name: "admin.complaint.index",
        component: () => import("../../views/admin/complaint/ComplaintIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    {
        path: "/admin/return-order/index",
        name: "admin.return-order.index",
        component: () => import("../../views/admin/return-order/ReturnOrderIndex.vue"),
        meta: {
            authRequired: true,
            rule:'admin'
        },
    },
    // {
    //     path: '/institution/prodi/edit/:id',
    //     name: 'institution-prodi.edit',
    //     component: () => import('../../views/admin/institution/prodi/Form.vue'),
    //     meta: {
    //         authRequired: true,
    //         rule:'institution'
    //     },
    // },
];
