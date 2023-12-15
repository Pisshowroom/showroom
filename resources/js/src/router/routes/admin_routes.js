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
