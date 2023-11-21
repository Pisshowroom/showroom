import moment from 'moment';
import Swal from 'sweetalert2';
class GlobalComponents {
    parseDate(datetime) {
        return moment(datetime).format('YYYY-MM-DD HH:mm:ss');
    }
    formatDateTime(datetime) {
        return moment(datetime).format('HH:mm, D MMMM YYYY');
    }
    formatMonth(datetime) {
        return moment(datetime).format('MMM');
    }
    formatDate(date) {
        return moment(date, 'YYYY-MM-DD').format('D MMMM YYYY');
    }
    formatDay(date) {
        return moment(date, 'YYYY-MM-DD').format('D');
    }
    formatTime(time) {
        return moment(time, 'HH:mm:ss').format('HH:mm a');
    }
    formatPrice(price) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        });
        return formatter.format(price);
    }
    formatThousand(angka) {
        return angka.toLocaleString('en-US').replace(/,/g, '.') ?? '';
    }
    dateFormat(datetime, format = null) {
        return moment(datetime).format(format || 'D MMMM YYYY, HH:mm');
    }
    rate(validity) {
        if (validity < 60) return 0;
        if (validity >= 61 && validity < 71) return 1;
        if (validity >= 71 && validity < 81) return 2;
        if (validity >= 81 && validity < 91) return 3;
        if (validity >= 91 && validity < 100) return 4;
        if (validity == 100) return 5;
    }
    falseRate(rate) {
        if (rate == 5) return 0;
        if (rate == 4) return 1;
        if (rate == 3) return 2;
        if (rate == 2) return 3;
        if (rate == 1) return 4;
        if (rate == 0) return 5;
    }
    handleToast(color, msg) {
        const toast = Swal.mixin({
            toast: true,
            position: 'bottom-right',
            showConfirmButton: false,
            customClass: {
                popup: `color-${color}`,
            },
            timer: 2000,
            showCloseButton: true,
        });
        toast.fire({
            title: msg,
        });
    }
    // imageUrl: str => {
    //   if (str.includes('http')) {
    //     return str
    //   }

    //   let base = 'https://alquran.ai/'
    //   if (http.defaults.baseURL) {
    //     base = http.defaults.baseURL.slice(0, -3)
    //   }
    //   return base + str
    // },
    formatPercent(percent) {
        return percent.toFixed(2);
    }
    formatNumber(num, price = false) {
        if (num < 0) return num.toString().replace('-', '');
        const result = num ? Number(num).toLocaleString('id-ID') : 0;
        if (price) return `Rp${result}`;
        return result;
    }
    objectToFormData(obj, form, namespace) {
        const fd = form || new FormData();
        let formKey;
        for (const property in obj) {
            if (obj.hasOwnProperty(property)) {
                if (namespace) {
                    formKey = `${namespace}[${property}]`;
                } else {
                    formKey = property;
                }
                // if the property is an object, but not a File,
                // use recursivity.
                if (typeof obj[property] === 'object' && !(obj[property] instanceof File)) {
                    this.objectToFormData(obj[property], fd, formKey);
                } else {
                    // if it's a string or a File object
                    fd.append(formKey, obj[property]);
                }
            }
        }
        return fd;
    }
    dataToFormData(data) {
        const formData = new FormData();
        Object.keys(data).forEach((key) => {
            const d = data[key];
            if (d == undefined || d == null) return;
            if (d.constructor === File) {
                formData.append(key, d, d.name);
                return;
            }
            if (d.constructor == Date) {
                const year = d.getFullYear();
                const month = d.getMonth() + 1;
                const day = d.getDate();
                const hours = d.getHours();
                const minutes = d.getMinutes();
                const seconds = d.getSeconds();
                const final = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                formData.append(key, final);
                return;
            }
            if (typeof d === 'object') {
                Object.keys(d).forEach((k) => {
                    const dd = d[k];
                    if (dd == undefined || dd == null) return;
                    if (dd.constructor === File) {
                        console.log('asdfghjkl;');
                        console.log(dd);
                        formData.append(`${key}[${k}]`, dd, dd.name);
                        return;
                    }
                    if (typeof dd === 'object') {
                        Object.keys(dd).forEach((kk) => {
                            const ddd = dd[kk];
                            if (ddd == undefined || ddd == null) return;
                            if (ddd.constructor === File) {
                                console.log("asdfghjkl;'");
                                console.log(ddd);
                                formData.append(`${key}[${k}]` + `[${kk}]`, ddd, ddd.name);
                                return;
                            }
                            if (typeof ddd === 'object') {
                                Object.keys(ddd).forEach((kkk) => {
                                    const dddd = ddd[kkk];
                                    if (dddd == undefined || dddd == null) return;
                                    if (dddd.constructor === File) {
                                        console.log('asdfghjkl;[]');
                                        console.log(dddd);
                                        formData.append(`${key}[${k}]` + `[${kk}]` + `[${kkk}]`, dddd, dddd.name);
                                        return;
                                    }
                                    if (typeof dddd === 'object') {
                                        Object.keys(dddd).forEach((kkkk) => {
                                            const ddddd = dddd[kkkk];
                                            if (ddddd == undefined || ddddd == null) return;
                                            if (ddddd.constructor === File) {
                                                console.log('asdfghjkl;[][]');
                                                console.log(ddddd);
                                                formData.append(`${key}[${k}]` + `[${kk}]` + `[${kkk}]` + `[${kkkk}]`, ddddd, ddddd.name);
                                                return;
                                            }
                                            if (typeof ddddd === 'object') {
                                                Object.keys(ddddd).forEach((kkkkk) => {
                                                    const dddddd = ddddd[kkkkk];
                                                    console.log(dddddd, 'daadada');
                                                    if (dddddd == undefined || dddddd == null) return;
                                                    if (dddddd.constructor === File) {
                                                        formData.append(
                                                            `${key}[${k}]` + `[${kk}]` + `[${kkk}]` + `[${kkkk}]` + `[${kkkkk}]`,
                                                            dddddd,
                                                            dddddd.name
                                                        );
                                                        return;
                                                    }
                                                    if (typeof dddddd === 'object') {
                                                        Object.keys(dddddd).forEach((kkkkkk) => {
                                                            const ddddddd = dddddd[kkkkkk];
                                                            if (ddddddd == undefined || ddddddd == null) return;
                                                            if (ddddddd.constructor === File) {
                                                                formData.append(
                                                                    `${key}[${k}]` + `[${kk}]` + `[${kkk}]` + `[${kkkk}]` + `[${kkkkk}]`,
                                                                    ddddddd,
                                                                    ddddddd.name
                                                                );
                                                                return;
                                                            }
                                                            if (typeof ddddddd === 'object') {
                                                                Object.keys(ddddddd).forEach((kkkkkkk) => {
                                                                    const dddddddd = ddddddd[kkkkkkk];
                                                                    if (dddddddd == undefined || dddddddd == null) return;
                                                                    if (dddddddd.constructor === File) {
                                                                        formData.append(
                                                                            `${key}[${k}]` +
                                                                            `[${kk}]` +
                                                                            `[${kkk}]` +
                                                                            `[${kkkk}]` +
                                                                            `[${kkkkk}]` +
                                                                            `[${kkkkkk}]` +
                                                                            `[${kkkkkkk}]`,
                                                                            dddddddd,
                                                                            dddddddd.name
                                                                        );
                                                                        return;
                                                                    }
                                                                    formData.append(
                                                                        `${key}[${k}]` +
                                                                        `[${kk}]` +
                                                                        `[${kkk}]` +
                                                                        `[${kkkk}]` +
                                                                        `[${kkkkk}]` +
                                                                        `[${kkkkkk}]` +
                                                                        `[${kkkkkkk}]`,
                                                                        dddddddd
                                                                    );
                                                                });
                                                                return;
                                                            }

                                                            formData.append(`${key}[${k}]` + `[${kk}]` + `[${kkk}]` + `[${kkkk}]` + `[${kkkkk}]`, ddddddd);
                                                        });
                                                        return;
                                                    }
                                                    formData.append(`${key}[${k}]` + `[${kk}]` + `[${kkk}]` + `[${kkkk}]` + `[${kkkkk}]`, dddddd);
                                                });
                                                return;
                                            }
                                            formData.append(`${key}[${k}]` + `[${kk}]` + `[${kkk}]` + `[${kkkk}]`, ddddd);
                                        });
                                        return;
                                    }
                                    formData.append(`${key}[${k}]` + `[${kk}]` + `[${kkk}]`, dddd);
                                });
                                return;
                            }
                            formData.append(`${key}[${k}]` + `[${kk}]`, ddd);
                        });
                        return;
                    }
                    formData.append(`${key}[${k}]`, dd);
                });
                return;
            }
            formData.append(key, d);
        });
        return formData;
    }
    readURL(file) {
        if (typeof file === 'object') return URL.createObjectURL(file);
    }
}

export default new GlobalComponents();
