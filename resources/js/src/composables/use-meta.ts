import { useHead } from '@vueuse/head';
import { unref, computed } from 'vue';

let siteTitle = '';
let separator = '|';

export const usePageTitle = (pageTitle: any) =>
    useHead(
        computed(() => ({
            title: `${unref(pageTitle)} ${separator} ${siteTitle}`,
        }))
    );

export const useMeta = (data: any) => {
    return useHead({ ...data, title: `${data.title} | VRISTO - Multipurpose Tailwind Dashboard Template` });
};
