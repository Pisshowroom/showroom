export default [
    {
        path: "/admin/dashboard",
        name: "admin.dashboard",
        component: () => import("../../views/admin/Dashboard.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/order/index",
        name: "admin.order.index",
        component: () => import("../../views/admin/order/OrderIndex.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },

    // master data iklan
    {
        path: "/admin/ads/index",
        name: "admin.ads.index",
        component: () => import("../../views/admin/ads/AdsIndex.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/ads/form",
        name: "admin.ads.form",
        component: () => import("../../views/admin/ads/AdsForm.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/ads/edit/:id",
        name: "admin.ads.edit",
        component: () => import("../../views/admin/ads/AdsForm.vue"),
    },
    {
        path: "/admin/user/index",
        name: "admin.user.index",
        component: () => import("../../views/admin/user/UserIndex.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/category/index",
        name: "admin.category.index",
        component: () => import("../../views/admin/category/CategoryIndex.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/category/form",
        name: "admin.category.form",
        component: () => import("../../views/admin/category/CategoryForm.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/category/edit/:id",
        name: "admin.category.edit",
        component: () => import("../../views/admin/category/CategoryForm.vue"),
    },
    
    {
        path: "/admin/sub-category/index",
        name: "admin.sub-category.index",
        component: () => import("../../views/admin/sub-category/SubCategoryIndex.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/sub-category/form",
        name: "admin.sub-category.form",
        component: () => import("../../views/admin/sub-category/SubCategoryForm.vue"),
        meta: {
            // authRequired: true,
            // rule:'institution'
        },
    },
    {
        path: "/admin/sub-category/edit/:id",
        name: "admin.sub-category.edit",
        component: () => import("../../views/admin/sub-category/SubCategoryForm.vue"),
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
