import { ref } from 'vue';

export default () => {
    let codeArr: any = ref([]);

    const toggleCode = (name: string) => {
        if (codeArr.value.includes(name)) {
            codeArr.value = codeArr.value.filter((d) => d != name);
        } else {
            codeArr.value.push(name);
        }
    };

    return { codeArr, toggleCode };
};
