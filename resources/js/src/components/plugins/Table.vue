<style>
.whitespace-nowrap.bh-table-hover.thead tr .th:last-child.bh-flex {
  justify-content: center;
}
</style>

<script setup lang="ts">
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogOverlay,
} from "@headlessui/vue";
import { computed, inject, onMounted, ref } from "vue";
import Vue3Datatable from "@bhplugin/vue3-datatable";
import { Axios } from "axios";
import { useRouter } from "vue-router";
import { useAppStore } from "@/stores/index";
const store = useAppStore();
const router = useRouter();
const search = ref("");
const axios = <Axios>inject("axios");
const totalRows = ref(0);
const page = ref(1);
const pageSize = ref(15);
const column_filters = ref("");
const loading = ref(true);
const rows: any = ref(null);
const col = ref("id");
const dir = ref("desc");
const datatable: any = ref(null);
const openModal: any = ref(false);

const { url, cols, addRoute, actions } = defineProps({
  url: {
    type: String,
    required: true,
  },
  cols: {
    type: Array,
    required: true,
  },
  acts: {
    type: Array,
  },
  addRoute: {
    type: String,
  },
  title: {
    type: String,
  },
  leaderboard: {
    type: Boolean,
  },
  addName: {
    type: String,
  },
  actions: {
    type: Array,
  },
  csv: {
    type: Boolean,
  },
  txt: {
    type: Boolean,
  },
  excel: {
    type: Boolean,
  },
  print: {
    type: Boolean,
  },
  dropdownAction: {
    type: Boolean,
  },
  searching: {
    type: Boolean,
  },
  isImport: {
    type: Boolean,
  },
  isFilter: {
    type: Boolean,
  },
  importUsers: {
    type: Object,
  },
});
const emit = defineEmits();
defineExpose({
  getData,
});

const exCol = computed(() => {
  const col = {};
  cols.map((c: any) => {
    col[c.title] = c.field;
  });
  return col;
});
const handleFileChange = (event: Event) => {
  const input = event.target as HTMLInputElement;
  const file = input.files?.[0]; // Get the selected file
  if (file) {
    // Emit the selected file to the parent component
    emit("importFile", file);
  }
};
const editData: any = computed(() => {
  return actions?.find((action: any) => action.type == "edit");
});

const previewData: any = computed(() => {
  return actions?.find((action: any) => action.type == "preview");
});

const deleteData: any = computed(() => {
  return actions?.find((action: any) => action.type == "delete");
});

const editDataWithButton: any = computed(() => {
  return actions?.find((action: any) => action.type == "editWithIcon");
});

const previewDataWithButton: any = computed(() => {
  return actions?.find((action: any) => action.type == "previewWithIcon");
});

const deleteDataWithButton: any = computed(() => {
  return actions?.find((action: any) => action.type == "deleteWithIcon");
});

const editDataIcon: any = computed(() => {
  return actions?.find((action: any) => action.type == "editIcon");
});

const previewDataIcon: any = computed(() => {
  return actions?.find((action: any) => action.type == "previewIcon");
});

const deleteDataIcon: any = computed(() => {
  return actions?.find((action: any) => action.type == "deleteIcon");
});

const editDataDropdown: any = computed(() => {
  return actions?.find((action: any) => action.type == "editDropdown");
});

const previewDataDropdown: any = computed(() => {
  return actions?.find((action: any) => action.type == "previewDropdown");
});

const deleteDataDropdown: any = computed(() => {
  return actions?.find((action: any) => action.type == "deleteDropdown");
});

const slots = computed(() => {
  return cols.filter((item: any) => item.slot).map((item: any) => item.field);
});

const handleImageError = (event: Event) => {
  const img = event.target as HTMLImageElement;
  img.src = "/assets/images/noimage1.png";
};

onMounted(() => {
  getData();
});

const exportTable = (type) => {
  let columns: any = cols.map((d: any) => {
    return [d.field, d.title];
  });

  let records = rows.value;
  let filename = "table";

  let newVariable: any;
  newVariable = window.navigator;

  if (type == "csv") {
    let coldelimiter = ";";
    let linedelimiter = "\n";
    let result = columns
      .map((d) => {
        return capitalize(d[1]);
      })
      .join(coldelimiter);
    result += linedelimiter;
    records.map((item) => {
      columns.map((d: any, index) => {
        if (index > 0) {
          result += coldelimiter;
        }
        let val = item[d[0]] ? item[d[0]] : "";
        result += val;
      });
      result += linedelimiter;
    });

    if (result == null) return;
    if (!result.match(/^data:text\/csv/i) && !newVariable.msSaveOrOpenBlob) {
      var data =
        "data:application/csv;charset=utf-8," + encodeURIComponent(result);
      var link = document.createElement("a");
      link.setAttribute("href", data);
      link.setAttribute("download", filename + ".csv");
      link.click();
    } else {
      var blob = new Blob([result]);
      if (newVariable.msSaveOrOpenBlob) {
        newVariable.msSaveBlob(blob, filename + ".csv");
      }
    }
  } else if (type == "print") {
    var rowhtml = "<p>" + filename + "</p>";
    rowhtml +=
      '<table style="width: 100%; " cellpadding="0" cellcpacing="0"><thead><tr style="color: #515365; background: #eff5ff; -webkit-print-color-adjust: exact; print-color-adjust: exact; "> ';
    columns.map((d) => {
      rowhtml += "<th>" + capitalize(d[1]) + "</th>";
    });
    rowhtml += "</tr></thead>";
    rowhtml += "<tbody>";

    records.map((item) => {
      rowhtml += "<tr>";
      columns.map((d: any) => {
        let val = item[d[0]] ? item[d[0]] : "";
        rowhtml += "<td>" + val + "</td>";
      });
      rowhtml += "</tr>";
    });
    rowhtml +=
      "<style>body {font-family:Arial; color:#495057;}p{text-align:center;font-size:18px;font-weight:bold;margin:15px;}table{ border-collapse: collapse; border-spacing: 0; }th,td{font-size:12px;text-align:left;padding: 4px;}th{padding:8px 4px;}tr:nth-child(2n-1){background:#f7f7f7; }</style>";
    rowhtml += "</tbody></table>";
    var winPrint: any = window.open(
      "",
      "",
      "left=0,top=0,width=1000,height=600,toolbar=0,scrollbars=0,status=0"
    );
    winPrint.document.write("<title>Print</title>" + rowhtml);
    winPrint.document.close();
    winPrint.focus();
    winPrint.print();
    // winPrint.close();
  } else if (type == "txt") {
    let coldelimiter = ",";
    let linedelimiter = "\n";
    let result = columns
      .map((d) => {
        return capitalize(d[1]);
      })
      .join(coldelimiter);
    result += linedelimiter;
    records.map((item) => {
      columns.map((d: any, index) => {
        if (index > 0) {
          result += coldelimiter;
        }
        let val = item[d[0]] ? item[d[0]] : "";
        result += val;
      });
      result += linedelimiter;
    });

    if (result == null) return;
    if (!result.match(/^data:text\/txt/i) && !newVariable.msSaveOrOpenBlob) {
      var data =
        "data:application/txt;charset=utf-8," + encodeURIComponent(result);
      var link = document.createElement("a");
      link.setAttribute("href", data);
      link.setAttribute("download", filename + ".txt");
      link.click();
    } else {
      var blob = new Blob([result]);
      if (newVariable.msSaveOrOpenBlob) {
        newVariable.msSaveBlob(blob, filename + ".txt");
      }
    }
  }
};

const excelColumns = () => {
  return exCol.value;
};

const excelItems = () => {
  return rows.value;
};

const capitalize = (text) => {
  return text
    .replace("_", " ")
    .replace("-", " ")
    .toLowerCase()
    .split(" ")
    .map((s) => s.charAt(0).toUpperCase() + s.substring(1))
    .join(" ");
};

const formatDate = (date) => {
  if (date) {
    const dt = new Date(date);
    const month =
      dt.getMonth() + 1 < 10 ? "0" + (dt.getMonth() + 1) : dt.getMonth() + 1;
    const day = dt.getDate() < 10 ? "0" + dt.getDate() : dt.getDate();
    return day + "/" + month + "/" + dt.getFullYear();
  }
  return "";
};

let timeoutId: number | undefined = undefined;

const change = (data) => {
  if (data?.change_type == "search" || data?.change_type == "pagesize") {
    if (timeoutId) {
      clearTimeout(timeoutId);
    }

    timeoutId = setTimeout(() => {
      column_filters.value = data.column_filters;
      console.log(column_filters);
      page.value = data.current_page;
      pageSize.value = data.pagesize;
      search.value = data.search;
      col.value = data.sort_column;
      dir.value = data.sort_direction;
      getData();
    }, 1500);
  } else {
    column_filters.value = data.column_filters;
    console.log(column_filters);
    page.value = data.current_page;
    pageSize.value = data.pagesize;
    search.value = data.search;
    col.value = data.sort_column;
    dir.value = data.sort_direction;
    getData();
  }
};

const orderNumber = (key): Number => {
  return page.value * pageSize.value - pageSize.value + (key + 1);
};

async function getData(paramsCustom?: any) {
  try {
    loading.value = true;
    const response = (
      await axios.get(url, {
        params: {
          per_page: pageSize.value,
          page: page.value,
          search: search.value,
          col: col.value,
          dir: dir.value,
          ...paramsCustom,
        },
      })
    ).data;
    console.log("response.total");
    console.log(response.total);

    totalRows.value = response.total;
    pageSize.value = response.per_page;
    page.value = response.current_page;
    rows.value = response.data.map((row, index) => {
      row.index_order = index;
      return row;
    });
  } catch (error) {}
  loading.value = false;
}

const randomStatusColor = () => {
  const color = [
    "primary",
    "secondary",
    "success",
    "danger",
    "warning",
    "info",
  ];
  const random = Math.floor(Math.random() * color.length);
  return color[random];
};

const randomStatus = () => {
  const status = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
  const random = Math.floor(Math.random() * status.length);
  return status[random];
};

const materialColor = (chapter) => {
  if (chapter == 1) return "bg-success";
  if (chapter == 2) return "bg-info";
  if (chapter == 3) return "bg-warning";
};
const rate: any = (validity) => {
  if (validity < 60) return 0;
  if (validity >= 61 && validity < 71) return 1;
  if (validity >= 71 && validity < 81) return 2;
  if (validity >= 81 && validity < 91) return 3;
  if (validity >= 91 && validity < 100) return 4;
  if (validity == 100) return 5;
};

const falseRate = (rate: number) => {
  if (rate == 5) return 0;
  if (rate == 4) return 1;
  if (rate == 3) return 2;
  if (rate == 2) return 3;
  if (rate == 1) return 4;
  if (rate == 0) return 5;
};

const allProgress = (material, murajaah, mudabbir) => {
  return Math.round(
    ((material / 125) * 100 +
      (murajaah / 572) * 100 +
      (mudabbir / 6236) * 100) /
      3
  );
};
</script>
<template>
  <div>
    <div class="panel pb-1.5 mt-6">
      <div class="flex flex-col mb-4.5">
        <div class="flex items-center flex-wrap">
          <button
            type="button"
            v-if="csv"
            class="btn btn-primary btn-sm m-1"
            @click="exportTable('csv')"
          >
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 ltr:mr-2 rtl:ml-2"
            >
              <path
                d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                fill="currentColor"
              />
              <path
                opacity="0.5"
                d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                stroke="currentColor"
                stroke-width="1.5"
              />
            </svg>
            CSV
          </button>
          <button
            type="button"
            v-if="txt"
            class="btn btn-primary btn-sm m-1"
            @click="exportTable('txt')"
          >
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 ltr:mr-2 rtl:ml-2"
            >
              <path
                d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                fill="currentColor"
              />
              <path
                opacity="0.5"
                d="M6 14.5H14"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                opacity="0.5"
                d="M6 18H11.5"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                opacity="0.5"
                d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                stroke="currentColor"
                stroke-width="1.5"
              />
            </svg>
            TXT
          </button>
          <!-- <vue3-json-excel v-if="excel" class="btn btn-primary btn-sm m-1 cursor-pointer" name="table.xls" :fields="excelColumns()" :json-data="excelItems()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
              <path
                d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                fill="currentColor"
              />
              <path opacity="0.5" d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22" stroke="currentColor" stroke-width="1.5" />
              <path
                opacity="0.5"
                d="M7 14L6 15L7 16M11.5 16L12.5 17L11.5 18M10 14L8.5 18"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>

            EXCEL
          </vue3-json-excel> -->
          <button
            type="button"
            v-if="print"
            class="btn btn-primary btn-sm m-1"
            @click="exportTable('print')"
          >
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 ltr:mr-2 rtl:ml-2"
            >
              <path
                d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827"
                stroke="currentColor"
                stroke-width="1.5"
              />
              <path
                opacity="0.5"
                d="M9 10H6"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                d="M19 14L5 14"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                opacity="0.5"
                d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6"
                stroke="currentColor"
                stroke-width="1.5"
              />
              <circle opacity="0.5" cx="17" cy="10" r="1" fill="currentColor" />
              <path
                opacity="0.5"
                d="M15 16.5H9"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                opacity="0.5"
                d="M13 19H9"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>
            PRINT
          </button>
        </div>

        <div
          class="flex md:items-center flex-col md:flex-row md:justify-between md:gap-0 gap-5 pb-2"
        >
          <h5 class="font-semibold text-lg dark:text-white-light flex">
            {{ title }}
            <img
              v-if="leaderboard"
              class="ml-2"
              src="/assets/images/leaderboard.svg"
              alt="leaderboard"
            />
          </h5>
          <div class="flex md:justify-between flex-wrap md:flex-nowrap gap-4">
            <input
              v-model="search"
              type="text"
              v-if="searching"
              class="form-input md:w-auto w-full"
              placeholder="Cari..."
            />
            <template v-if="isImport">
              <label
                for="import-user"
                class="btn h-10 mb-0 btn-outline-primary cursor-pointer"
              >
                <svg
                  class="mr-2"
                  width="18"
                  height="18"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    opacity="0.5"
                    d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <path
                    d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <input
                  id="import-user"
                  type="file"
                  class="hidden"
                  @change="handleFileChange"
                  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                />
                Import xls
              </label>
            </template>

            <router-link v-if="addRoute" :to="addRoute" class="btn btn-primary"
              ><svg
                class="mr-2"
                width="24"
                height="24"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_265_1756)">
                  <circle
                    opacity="0.5"
                    cx="8.00016"
                    cy="7.99967"
                    r="6.66667"
                    stroke="#FAFAFA"
                    stroke-width="1.03333"
                  />
                  <path
                    d="M10 8.00002L8 8.00002M8 8.00002L6 8.00002M8 8.00002L8 6M8 8.00002L8 10"
                    stroke="#FAFAFA"
                    stroke-width="1.03333"
                    stroke-linecap="round"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_265_1756">
                    <rect width="16" height="16" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              {{ addName }}</router-link
            >
          </div>
        </div>
      </div>

      <div class="datatable">
        <!-- :page="page"
          :pageSize="pageSize"
          :pageSizeOptions="[10, 20, 30, 50, 100]"
          :showPageSize="true"
          :loading="loading"
          :showNumbers="true"
          :showNumbersCount="Math.round(totalRows / pageSize)"
          @change="change"
        -->
        <vue3-datatable
          ref="datatable"
          :rows="rows"
          :columns="cols"
          :isServerMode="true"
          :totalRows="totalRows"
          :sortable="true"
          :columnFilter="isFilter"
          :pageSizeOptions="[5, 10, 30, 50]"
          @change="change"
          :search="search"
          :pagination="true"
          skin="whitespace-nowrap bh-table-hover"
          firstArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
          lastArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> '
          previousArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
          nextArrow='<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>'
        >
          <template v-for="slot in slots" v-slot:[slot]="data" :key="slot">
            {{
              slot == "number"
                ? orderNumber(data.value.index_order)
                : slot != "actions"
                ? data.value
                : ""
            }}
            <div class="flex gap-4 items-center" v-if="slot == 'actions'">
              <!-- dropdown action  -->
              <template v-if="dropdownAction">
                <td class="text-center">
                  <div class="dropdown">
                    <Popper
                      placement="bottom-end"
                      offsetDistance="0"
                      class="align-middle"
                    >
                      <a href="javascript:;">
                        <svg
                          class="w-5 h-5 opacity-70 m-auto"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <circle
                            cx="5"
                            cy="12"
                            r="2"
                            stroke="currentColor"
                            stroke-width="1.5"
                          ></circle>
                          <circle
                            opacity="0.5"
                            cx="12"
                            cy="12"
                            r="2"
                            stroke="currentColor"
                            stroke-width="1.5"
                          ></circle>
                          <circle
                            cx="19"
                            cy="12"
                            r="2"
                            stroke="currentColor"
                            stroke-width="1.5"
                          ></circle>
                        </svg>
                      </a>
                      <template #content="{ close }">
                        <ul @click="close()">
                          <li>
                            <template v-if="editDataDropdown">
                              <router-link :to="editDataDropdown.to(data)"
                                >Edit</router-link
                              >
                            </template>
                          </li>
                          <!-- <li>
                            <template v-if="previewDataDropdown"></template>
                            <router-link :to="previewDataDropdown.to(data)">Detail</router-link>
                          </li> -->
                          <li>
                            <template v-if="deleteDataDropdown">
                              <button
                                type="button"
                                @click="deleteDataDropdown.click(data)"
                              >
                                Hapus
                              </button>
                            </template>
                          </li>
                        </ul>
                      </template>
                    </Popper>
                  </div>
                </td>
              </template>
              <!-- action with icon without color  -->
              <template v-if="editData">
                <router-link :to="editData.to(data)" class="hover:text-info">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4.5 h-4.5"
                  >
                    <path
                      opacity="0.5"
                      d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                  </svg>
                </router-link>
              </template>
              <template v-if="previewData">
                <router-link
                  :to="previewData.to(data)"
                  class="hover:text-primary"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5"
                  >
                    <path
                      opacity="0.5"
                      d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                    <path
                      d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                  </svg>
                </router-link>
              </template>
              <template v-if="deleteData">
                <button
                  type="button"
                  class="hover:text-danger"
                  @click="deleteData.click(data)"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5"
                  >
                    <path
                      d="M20.5001 6H3.5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M9.5 11L10 16"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M14.5 11L14 16"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                  </svg>
                </button>
              </template>

              <!-- action with button  -->
              <template v-if="editDataWithButton">
                <router-link
                  :to="editDataWithButton.to(data)"
                  class="hover:text-info"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4.5 h-4.5"
                  >
                    <path
                      opacity="0.5"
                      d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                  </svg>
                </router-link>
              </template>
              <template v-if="previewDataWithButton">
                <router-link
                  :to="previewDataWithButton.to(data)"
                  class="hover:text-primary"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5"
                  >
                    <path
                      opacity="0.5"
                      d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                    <path
                      d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                  </svg>
                </router-link>
              </template>
              <template v-if="deleteDataWithButton">
                <button
                  type="button"
                  class="hover:text-danger"
                  @click="deleteDataWithButton.click(data)"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5"
                  >
                    <path
                      d="M20.5001 6H3.5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M9.5 11L10 16"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M14.5 11L14 16"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    ></path>
                    <path
                      opacity="0.5"
                      d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                      stroke="currentColor"
                      stroke-width="1.5"
                    ></path>
                  </svg>
                </button>
              </template>
              <!-- action with icon and color  -->
              <template v-if="editDataIcon">
                <router-link
                  :to="editDataIcon.to(data)"
                  class="hover:text-info"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M13.236 2.6483L12.4637 3.4207L5.36259 10.5217C4.88163 11.0027 4.64114 11.2431 4.43432 11.5083C4.19035 11.8211 3.98119 12.1596 3.81052 12.5176C3.66585 12.8212 3.55831 13.1439 3.34321 13.7891L2.43175 16.5236L2.20895 17.192C2.1031 17.5095 2.18574 17.8596 2.42243 18.0963C2.65912 18.333 3.00922 18.4156 3.32677 18.3098L3.99517 18.087L6.72956 17.1755C7.37484 16.9604 7.69749 16.8529 8.00106 16.7082C8.35915 16.5376 8.69759 16.3284 9.01041 16.0844C9.27558 15.8776 9.51599 15.6371 9.99699 15.1561L17.098 8.05509L17.8704 7.2827C19.1502 6.00294 19.1502 3.92805 17.8704 2.6483C16.5907 1.36854 14.5157 1.36854 13.236 2.6483Z"
                      stroke="#00AB55"
                      stroke-width="1.2"
                    />
                    <path
                      opacity="0.5"
                      d="M12.4635 3.41992C12.4635 3.41992 12.5601 5.06127 14.0083 6.50952C15.4566 7.95777 17.0979 8.05432 17.0979 8.05432M3.99507 18.0862L2.43164 16.5227"
                      stroke="#00AB55"
                      stroke-width="1.2"
                    />
                  </svg>
                </router-link>
              </template>
              <template v-if="previewDataIcon">
                <router-link
                  :to="previewDataIcon.to(data)"
                  class="hover:text-primary"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.4966 12.5215C11.8773 12.5215 12.9966 11.4022 12.9966 10.0215C12.9966 8.64077 11.8773 7.52148 10.4966 7.52148C9.11587 7.52148 7.99658 8.64077 7.99658 10.0215C7.99658 11.4022 9.11587 12.5215 10.4966 12.5215Z"
                      stroke="#4361EE"
                      stroke-width="1.2"
                    />
                    <path
                      opacity="0.5"
                      d="M11.9677 1.81632C11.6613 1.68945 11.2731 1.68945 10.4965 1.68945C9.71991 1.68945 9.33166 1.68945 9.02533 1.81632C8.61697 1.98548 8.29252 2.30994 8.12336 2.71831C8.04614 2.90474 8.01592 3.12154 8.00409 3.43778C7.98672 3.90252 7.74838 4.33269 7.34561 4.56523C6.94286 4.79775 6.45116 4.78907 6.03999 4.57175C5.76021 4.42387 5.55734 4.34164 5.35728 4.3153C4.91903 4.2576 4.47582 4.37636 4.12513 4.64545C3.86212 4.84727 3.66797 5.18354 3.27969 5.85606C2.89141 6.52859 2.69727 6.86485 2.65399 7.19354C2.5963 7.63179 2.71506 8.075 2.98415 8.4257C3.10697 8.58579 3.27958 8.72029 3.54749 8.88862C3.94133 9.13612 4.19474 9.5577 4.19472 10.0228C4.19469 10.4879 3.94129 10.9094 3.54748 11.1568C3.27954 11.3252 3.1069 11.4598 2.98407 11.6199C2.71497 11.9705 2.59622 12.4137 2.65392 12.852C2.69718 13.1806 2.89132 13.517 3.27961 14.1895C3.6679 14.862 3.86204 15.1983 4.12505 15.4C4.47573 15.6691 4.91895 15.7879 5.3572 15.7302C5.55724 15.7039 5.7601 15.6216 6.03986 15.4738C6.45106 15.2565 6.9428 15.2478 7.34558 15.4803C7.74836 15.7129 7.98672 16.143 8.00409 16.6079C8.01592 16.924 8.04614 17.1409 8.12336 17.3273C8.29252 17.7356 8.61697 18.0601 9.02533 18.2293C9.33166 18.3561 9.71991 18.3561 10.4965 18.3561C11.2731 18.3561 11.6613 18.3561 11.9677 18.2293C12.376 18.0601 12.7005 17.7356 12.8696 17.3273C12.9468 17.1409 12.9771 16.924 12.9889 16.6078C13.0062 16.143 13.2446 15.7129 13.6473 15.4803C14.0501 15.2477 14.5418 15.2565 14.9531 15.4738C15.2328 15.6216 15.4357 15.7038 15.6357 15.7301C16.0739 15.7879 16.5172 15.6691 16.8678 15.4C17.1308 15.1982 17.325 14.862 17.7132 14.1894C18.1016 13.5169 18.2957 13.1806 18.339 12.852C18.3967 12.4137 18.2779 11.9705 18.0088 11.6198C17.886 11.4597 17.7133 11.3251 17.4454 11.1568C17.0517 10.9094 16.7982 10.4878 16.7982 10.0227C16.7982 9.55762 17.0517 9.1362 17.4454 8.88879C17.7134 8.72037 17.8861 8.58587 18.0089 8.4257C18.278 8.07506 18.3967 7.63184 18.3391 7.19359C18.2958 6.86491 18.1017 6.52864 17.7133 5.85612C17.3251 5.18359 17.1309 4.84733 16.8679 4.64551C16.5172 4.37642 16.074 4.25766 15.6357 4.31536C15.4357 4.34169 15.2329 4.42392 14.9531 4.57179C14.5419 4.78911 14.0502 4.7978 13.6474 4.56525C13.2446 4.33271 13.0062 3.9025 12.9889 3.43774C12.9771 3.12152 12.9468 2.90473 12.8696 2.71831C12.7005 2.30994 12.376 1.98548 11.9677 1.81632Z"
                      stroke="#4361EE"
                      stroke-width="1.2"
                    />
                  </svg>
                </router-link>
              </template>
              <template v-if="deleteDataIcon">
                <button
                  type="button"
                  class="hover:text-danger"
                  @click="deleteDataIcon.click(data)"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M17.5798 5.02148H3.41309"
                      stroke="#E7515A"
                      stroke-width="1.2"
                      stroke-linecap="round"
                    />
                    <path
                      d="M16.1911 7.10352L15.8079 12.8528C15.6604 15.0652 15.5866 16.1714 14.8658 16.8458C14.145 17.5202 13.0363 17.5202 10.819 17.5202H10.1745C7.95712 17.5202 6.84845 17.5202 6.12761 16.8458C5.40677 16.1714 5.33302 15.0652 5.18553 12.8528L4.80225 7.10352"
                      stroke="#E7515A"
                      stroke-width="1.2"
                      stroke-linecap="round"
                    />
                    <path
                      opacity="0.5"
                      d="M8.41309 9.18945L8.82975 13.3561"
                      stroke="#E7515A"
                      stroke-width="1.2"
                      stroke-linecap="round"
                    />
                    <path
                      opacity="0.5"
                      d="M12.5798 9.18945L12.1631 13.3561"
                      stroke="#E7515A"
                      stroke-width="1.2"
                      stroke-linecap="round"
                    />
                    <path
                      opacity="0.5"
                      d="M5.91309 5.02246C5.95965 5.02246 5.98294 5.02246 6.00404 5.02193C6.69024 5.00454 7.2956 4.56822 7.5291 3.92273C7.53629 3.90287 7.54364 3.88079 7.55837 3.8366L7.63928 3.59389C7.70834 3.38669 7.74288 3.28309 7.78868 3.19513C7.97143 2.84419 8.30954 2.60049 8.70026 2.5381C8.79819 2.52246 8.90742 2.52246 9.12584 2.52246H11.867C12.0854 2.52246 12.1947 2.52246 12.2926 2.5381C12.6833 2.60049 13.0214 2.84419 13.2042 3.19513C13.25 3.28309 13.2845 3.38669 13.3536 3.59389L13.4345 3.8366C13.4492 3.88073 13.4566 3.90289 13.4638 3.92273C13.6973 4.56822 14.3026 5.00454 14.9888 5.02193C15.0099 5.02246 15.0332 5.02246 15.0798 5.02246"
                      stroke="#E7515A"
                      stroke-width="1.2"
                    />
                  </svg>
                </button>
              </template>
            </div>
          </template>
          <!-- user with rounded full  -->
          <template #roundedImage1="data">
            <div class="flex items-center gap-2">
              <img
                :style="
                  data.value?.image == null || data.value?.image.length == 0
                    ? 'background-color: #cbd0d3'
                    : ''
                "
                class="w-9 h-9 rounded-full max-w-none"
                @error="handleImageError"
                :src="
                  data.value?.image != null && data.value?.image.length > 0
                    ? axios.getUri().replace('/api', '') + data.value.image
                    : '/assets/images/lightbox4.jpeg'
                "
                alt="avatar"
              />
              <!-- <img v-if="data.value?.image != null && data.value?.image.length > 0"
                                :src="axios.getUri().replace('/api', '/') + data.value?.image"
                                class="w-9 h-9 rounded-full max-w-none" alt="user-profile" />
                            <img v-else src="/assets/images/users.svg" style="background-color: #cbd0d3"
                                class="w-9 h-9 rounded-full max-w-none" alt="user-profile" /> -->
            </div>
          </template>
          <template #nameWithRoundedImage1="data">
            <div class="flex items-center gap-2">
              <img
                :style="
                  data.value?.image == null || data.value?.image.length == 0
                    ? 'background-color: #cbd0d3'
                    : ''
                "
                class="w-9 h-9 rounded-full max-w-none"
                :src="
                  data.value?.image != null && data.value?.image.length > 0
                    ? axios.getUri().replace('/api', '') + data.value.image
                    : '/assets/images/lightbox4.jpeg'
                "
                alt="avatar"
              />
              <!-- <img v-if="data.value?.image != null && data.value?.image.length > 0"
                                :src="axios.getUri().replace('/api', '/') + data.value?.image"
                                class="w-9 h-9 rounded-full max-w-none" alt="user-profile" />
                            <img v-else src="/assets/images/users.svg" style="background-color: #cbd0d3"
                                class="w-9 h-9 rounded-full max-w-none" alt="user-profile" /> -->
              <div class="font-semibold truncate">{{ data.value?.name }}</div>
            </div>
          </template>
          <!-- user with rounded md  -->
          <template #nameWithRoundedImage2="data">
            <div
              class="flex items-center gap-2"
              v-if="data.value.user_material != undefined"
            >
              <img
                v-if="
                  data.value.user_material.user?.image != null &&
                  data.value.user_material.user?.image.length > 0
                "
                :src="
                  axios.getUri().replace('/api', '/') +
                  data.value.user_material.user?.image
                "
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <img
                v-else
                src="/assets/images/users.svg"
                style="background-color: #cbd0d3"
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <div class="font-semibold truncate">
                {{ data.value.user_material.user?.name }}
              </div>
            </div>
            <div
              class="flex items-center gap-2"
              v-else-if="data.value.fasih_user != undefined"
            >
              <img
                v-if="
                  data.value.fasih_user.user?.image != null &&
                  data.value.fasih_user.user?.image.length > 0
                "
                :src="
                  axios.getUri().replace('/api', '/') +
                  data.value.fasih_user.user?.image
                "
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <img
                v-else
                src="/assets/images/users.svg"
                style="background-color: #cbd0d3"
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <div class="font-semibold truncate">
                {{ data.value.fasih_user.user?.name }}
              </div>
            </div>
            <div
              class="flex items-center gap-2"
              v-else-if="data.value.user != undefined"
            >
              <img
                v-if="
                  data.value.user?.image != null &&
                  data.value.user?.image.length > 0
                "
                :src="
                  axios.getUri().replace('/api', '/') + data.value.user?.image
                "
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <img
                v-else
                src="/assets/images/users.svg"
                style="background-color: #cbd0d3"
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <div class="font-semibold truncate">
                {{ data.value.user?.name }}
              </div>
            </div>
            <div class="flex items-center gap-2" v-else>
              <img
                v-if="data.value?.image != null && data.value?.image.length > 0"
                :src="axios.getUri().replace('/api', '/') + data.value?.image"
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <img
                v-else
                src="/assets/images/users.svg"
                style="background-color: #cbd0d3"
                class="w-9 h-9 rounded-md max-w-none"
                alt="user-profile"
              />
              <div class="font-semibold truncate">{{ data.value?.name }}</div>
            </div>
          </template>
          <!-- operator with rounded full  -->
          <template #nameWithRoundedImage3="data">
            <div class="flex items-center gap-2">
              <img
                v-if="
                  data.value.operator &&
                  data.value.operator?.image != null &&
                  data.value.operator?.image.length > 0
                "
                :src="
                  axios.getUri().replace('/api', '/') +
                  data.value.operator?.image
                "
                class="w-9 h-9 rounded-full max-w-none"
                alt="user-profile"
              />
              <div v-else-if="data.value.operator == null"></div>
              <img
                v-else
                src="/assets/images/users.svg"
                style="background-color: #cbd0d3"
                class="w-9 h-9 rounded-full max-w-none"
                alt="user-profile"
              />
              <div class="font-semibold truncate">
                {{ data.value.operator?.name }}
              </div>
            </div>
          </template>
          <template #nameWithRoundedImage4="data">
            <div class="flex items-center gap-2">
              <img
                v-if="
                  data.value.user?.image != null &&
                  data.value.user?.image.length > 0
                "
                :src="
                  axios.getUri().replace('/api', '/') + data.value.user?.image
                "
                class="w-9 h-9 rounded-full max-w-none"
                alt="user-profile"
              />
              <img
                v-else
                src="/assets/images/users.svg"
                style="background-color: #cbd0d3"
                class="w-9 h-9 rounded-full max-w-none"
                alt="user-profile"
              />
              <div class="font-semibold truncate">
                {{ data.value.user?.name }}
              </div>
            </div>
          </template>
          <template #correction="data">
            <span
              class="badge"
              :class="{
                'bg-success': data.value?.is_true == 1,
                'bg-danger': data.value?.is_true == 0,
              }"
              v-if="data.value.is_true != undefined"
              >{{ data.value.is_true == 1 ? "Benar" : "Salah" }}</span
            >
          </template>
          <template #faculty="data">
            <span
              class="badge"
              :style="`background-color:${data.value.educational_faculty?.color}`"
              v-if="data.value.educational_faculty != undefined"
              >{{ data.value.educational_faculty?.name }}</span
            >
            <span
              class="badge"
              :style="`background-color:${data.value.user_material.user.educational_faculty?.color}`"
              v-else-if="data.value.user_material != undefined"
              >{{
                data.value.user_material.user.educational_faculty?.name
              }}</span
            >
            <span
              class="badge"
              :style="`background-color:${data.value.fasih_user.user.educational_faculty?.color}`"
              v-else-if="data.value.fasih_user != undefined"
              >{{ data.value.fasih_user.user.educational_faculty?.name }}</span
            >

            <span
              class="badge"
              :style="`background-color:${data.value.user?.educational_faculty?.color}`"
              v-else
              >{{ data.value.user?.educational_faculty?.name }}</span
            >
          </template>
          <template #chapter="data">
            <span
              class="badge"
              :class="materialColor(data.value.exam.material.chapter)"
              v-if="data.value.exam != undefined"
              >{{
                data.value.exam.material.chapter == 1
                  ? "Hijaiyah"
                  : data.value.exam.material.chapter == 2
                  ? "Tahsin"
                  : "Tajwid"
              }}</span
            >
            <span
              class="badge"
              :class="materialColor(data.value.chapter)"
              v-else
              >{{
                data.value.chapter == 1
                  ? "Hijaiyah"
                  : data.value.chapter == 2
                  ? "Tahsin"
                  : "Tajwid"
              }}</span
            >
          </template>
          <template #chapter_progress="data">
            <div
              class="w-4/5 min-w-[100px] h-2.5 bg-gray-200 dark:bg-dark/40 rounded-full flex"
            >
              <div
                :class="`h-2.5 rounded-full rounded-bl-full text-center text-white text-xs ${materialColor(
                  data.value.chapter
                )}`"
                :style="`width:${data.value.chapter_progress}%;`"
              ></div>
            </div>
          </template>
          <template #validity="data">
            <div class="flex items-center justify-center">
              <template v-if="rate(data.value.validity) == 5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="13"
                  height="14"
                  viewBox="0 0 13 14"
                  fill="none"
                  v-for="i in rate(data.value.validity)"
                  :key="i"
                >
                  <path
                    d="M5.16526 3.27898C5.88553 1.98687 6.24565 1.34082 6.7841 1.34082C7.32255 1.34082 7.68267 1.98687 8.40291 3.27897L8.58926 3.61325C8.79397 3.98043 8.89627 4.16402 9.05589 4.28515C9.21545 4.40628 9.41413 4.45125 9.81161 4.54118L10.1735 4.62305C11.5721 4.93952 12.2715 5.09775 12.4379 5.63279C12.6043 6.16781 12.1275 6.72537 11.174 7.84036L10.9273 8.12884C10.6563 8.44569 10.5208 8.60411 10.4599 8.80012C10.399 8.99613 10.4194 9.2075 10.4604 9.63029L10.4977 10.0151C10.6418 11.5028 10.7139 12.2467 10.2784 12.5773C9.84272 12.908 9.18793 12.6065 7.87834 12.0036L7.53954 11.8475C7.16742 11.6762 6.98136 11.5905 6.7841 11.5905C6.58683 11.5905 6.40077 11.6762 6.02865 11.8475L5.68986 12.0036C4.38026 12.6065 3.72546 12.908 3.28987 12.5773C2.85427 12.2467 2.92635 11.5028 3.07051 10.0151L3.1078 9.63029C3.14877 9.2075 3.16926 8.99613 3.1083 8.80012C3.04736 8.60411 2.91188 8.44569 2.64091 8.12884L2.39422 7.84036C1.44069 6.72537 0.963924 6.16781 1.13031 5.63279C1.29669 5.09775 1.99604 4.93952 3.39472 4.62305L3.75657 4.54118C4.15403 4.45125 4.35276 4.40628 4.51233 4.28515C4.6719 4.16402 4.77424 3.98043 4.97892 3.61325L5.16526 3.27898Z"
                    fill="#E2A03F"
                    stroke="#E2A03F"
                    stroke-width="0.852966"
                  />
                </svg>
              </template>
              <template v-if="rate(data.value.validity) == 4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="13"
                  height="14"
                  viewBox="0 0 13 14"
                  fill="none"
                  v-for="i in rate(data.value.validity)"
                  :key="i"
                >
                  <path
                    d="M5.10764 3.18523C5.82791 1.89312 6.18803 1.24707 6.72648 1.24707C7.26493 1.24707 7.62505 1.89312 8.3453 3.18522L8.53164 3.5195C8.73635 3.88668 8.83865 4.07027 8.99827 4.1914C9.15783 4.31253 9.35652 4.3575 9.754 4.44743L10.1159 4.5293C11.5145 4.84577 12.2139 5.004 12.3803 5.53904C12.5467 6.07406 12.0699 6.63162 11.1164 7.74661L10.8697 8.03509C10.5987 8.35194 10.4632 8.51036 10.4023 8.70637C10.3413 8.90238 10.3618 9.11375 10.4028 9.53654L10.4401 9.92139C10.5842 11.4091 10.6563 12.1529 10.2207 12.4836C9.7851 12.8143 9.13031 12.5128 7.82072 11.9098L7.48192 11.7538C7.1098 11.5825 6.92374 11.4968 6.72648 11.4968C6.52922 11.4968 6.34316 11.5825 5.97104 11.7538L5.63224 11.9098C4.32264 12.5128 3.66785 12.8143 3.23225 12.4836C2.79665 12.1529 2.86873 11.4091 3.01289 9.92139L3.05019 9.53654C3.09116 9.11375 3.11164 8.90238 3.05069 8.70637C2.98974 8.51036 2.85426 8.35194 2.58329 8.03509L2.33661 7.74661C1.38307 6.63162 0.906306 6.07406 1.07269 5.53904C1.23908 5.004 1.93842 4.84577 3.3371 4.5293L3.69896 4.44743C4.09642 4.3575 4.29515 4.31253 4.45471 4.1914C4.61428 4.07027 4.71662 3.88668 4.9213 3.5195L5.10764 3.18523Z"
                    fill="#00AB55"
                    stroke="#00AB55"
                    stroke-width="0.852966"
                  />
                </svg>
              </template>
              <template v-if="rate(data.value.validity) == 3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="13"
                  height="14"
                  viewBox="0 0 13 14"
                  fill="none"
                  v-for="i in rate(data.value.validity)"
                  :key="i"
                >
                  <path
                    d="M5.10764 3.18523C5.82791 1.89312 6.18803 1.24707 6.72648 1.24707C7.26493 1.24707 7.62505 1.89312 8.3453 3.18522L8.53164 3.5195C8.73635 3.88668 8.83865 4.07027 8.99827 4.1914C9.15783 4.31253 9.35652 4.3575 9.754 4.44743L10.1159 4.5293C11.5145 4.84577 12.2139 5.004 12.3803 5.53904C12.5467 6.07406 12.0699 6.63162 11.1164 7.74661L10.8697 8.03509C10.5987 8.35194 10.4632 8.51036 10.4023 8.70637C10.3413 8.90238 10.3618 9.11375 10.4028 9.53654L10.4401 9.92139C10.5842 11.4091 10.6563 12.1529 10.2207 12.4836C9.7851 12.8143 9.13031 12.5128 7.82072 11.9098L7.48192 11.7538C7.1098 11.5825 6.92374 11.4968 6.72648 11.4968C6.52922 11.4968 6.34316 11.5825 5.97104 11.7538L5.63224 11.9098C4.32264 12.5128 3.66785 12.8143 3.23225 12.4836C2.79665 12.1529 2.86873 11.4091 3.01289 9.92139L3.05019 9.53654C3.09116 9.11375 3.11164 8.90238 3.05069 8.70637C2.98974 8.51036 2.85426 8.35194 2.58329 8.03509L2.33661 7.74661C1.38307 6.63162 0.906306 6.07406 1.07269 5.53904C1.23908 5.004 1.93842 4.84577 3.3371 4.5293L3.69896 4.44743C4.09642 4.3575 4.29515 4.31253 4.45471 4.1914C4.61428 4.07027 4.71662 3.88668 4.9213 3.5195L5.10764 3.18523Z"
                    fill="#00AB55"
                    stroke="#00AB55"
                    stroke-width="0.852966"
                  />
                </svg>
              </template>
              <template v-if="rate(data.value.validity) == 2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="13"
                  height="14"
                  viewBox="0 0 13 14"
                  fill="none"
                  v-for="i in rate(data.value.validity)"
                  :key="i"
                >
                  <path
                    d="M5.10764 3.18523C5.82791 1.89312 6.18803 1.24707 6.72648 1.24707C7.26493 1.24707 7.62505 1.89312 8.3453 3.18522L8.53164 3.5195C8.73635 3.88668 8.83865 4.07027 8.99827 4.1914C9.15783 4.31253 9.35652 4.3575 9.754 4.44743L10.1159 4.5293C11.5145 4.84577 12.2139 5.004 12.3803 5.53904C12.5467 6.07406 12.0699 6.63162 11.1164 7.74661L10.8697 8.03509C10.5987 8.35194 10.4632 8.51036 10.4023 8.70637C10.3413 8.90238 10.3618 9.11375 10.4028 9.53654L10.4401 9.92139C10.5842 11.4091 10.6563 12.1529 10.2207 12.4836C9.7851 12.8143 9.13031 12.5128 7.82072 11.9098L7.48192 11.7538C7.1098 11.5825 6.92374 11.4968 6.72648 11.4968C6.52922 11.4968 6.34316 11.5825 5.97104 11.7538L5.63224 11.9098C4.32264 12.5128 3.66785 12.8143 3.23225 12.4836C2.79665 12.1529 2.86873 11.4091 3.01289 9.92139L3.05019 9.53654C3.09116 9.11375 3.11164 8.90238 3.05069 8.70637C2.98974 8.51036 2.85426 8.35194 2.58329 8.03509L2.33661 7.74661C1.38307 6.63162 0.906306 6.07406 1.07269 5.53904C1.23908 5.004 1.93842 4.84577 3.3371 4.5293L3.69896 4.44743C4.09642 4.3575 4.29515 4.31253 4.45471 4.1914C4.61428 4.07027 4.71662 3.88668 4.9213 3.5195L5.10764 3.18523Z"
                    fill="#2196F3"
                    stroke="#2196F3"
                    stroke-width="0.852966"
                  />
                </svg>
              </template>
              <template v-if="rate(data.value.validity) == 1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="13"
                  height="13"
                  viewBox="0 0 13 13"
                  fill="none"
                  v-for="i in rate(data.value.validity)"
                  :key="i"
                >
                  <path
                    d="M5.16526 2.9987C5.88553 1.7066 6.24565 1.06055 6.7841 1.06055C7.32255 1.06055 7.68267 1.70659 8.40291 2.9987L8.58926 3.33298C8.79397 3.70015 8.89627 3.88375 9.05589 4.00488C9.21545 4.12601 9.41413 4.17097 9.81161 4.2609L10.1735 4.34278C11.5721 4.65924 12.2715 4.81748 12.4379 5.35252C12.6043 5.88754 12.1275 6.44509 11.174 7.56009L10.9273 7.84856C10.6563 8.16541 10.5208 8.32384 10.4599 8.51985C10.399 8.71586 10.4194 8.92723 10.4604 9.35001L10.4977 9.73487C10.6418 11.2226 10.7139 11.9664 10.2784 12.2971C9.84272 12.6277 9.18793 12.3262 7.87834 11.7233L7.53954 11.5673C7.16742 11.3959 6.98136 11.3102 6.7841 11.3102C6.58683 11.3102 6.40077 11.3959 6.02865 11.5673L5.68986 11.7233C4.38026 12.3262 3.72546 12.6277 3.28987 12.2971C2.85427 11.9664 2.92635 11.2226 3.07051 9.73487L3.1078 9.35001C3.14877 8.92723 3.16926 8.71586 3.1083 8.51985C3.04736 8.32384 2.91188 8.16541 2.64091 7.84856L2.39422 7.56009C1.44069 6.44509 0.963924 5.88754 1.13031 5.35252C1.29669 4.81748 1.99604 4.65924 3.39472 4.34278L3.75657 4.2609C4.15403 4.17097 4.35276 4.12601 4.51233 4.00488C4.6719 3.88375 4.77424 3.70016 4.97892 3.33298L5.16526 2.9987Z"
                    fill="#E7515A"
                    stroke="#E7515A"
                    stroke-width="0.852966"
                  />
                </svg>
              </template>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="13"
                height="13"
                viewBox="0 0 13 13"
                fill="none"
                v-for="i in falseRate(rate(data.value.validity))"
                :key="i"
              >
                <path
                  d="M4.81272 2.90593C5.53299 1.61383 5.89311 0.967773 6.43156 0.967773C6.97001 0.967773 7.33013 1.61382 8.05037 2.90592L8.23672 3.24021C8.44143 3.60738 8.54373 3.79097 8.70335 3.9121C8.86291 4.03324 9.06159 4.0782 9.45908 4.16813L9.82096 4.25C11.2196 4.56647 11.919 4.7247 12.0854 5.25975C12.2517 5.79477 11.775 6.35232 10.8214 7.46732L10.5748 7.75579C10.3038 8.07264 10.1683 8.23106 10.1073 8.42708C10.0464 8.62309 10.0669 8.83445 10.1078 9.25724L10.1451 9.6421C10.2893 11.1298 10.3614 11.8736 9.92582 12.2043C9.49018 12.535 8.83539 12.2335 7.5258 11.6305L7.187 11.4745C6.81488 11.3032 6.62882 11.2175 6.43156 11.2175C6.2343 11.2175 6.04824 11.3032 5.67611 11.4745L5.33732 11.6305C4.02772 12.2335 3.37292 12.535 2.93733 12.2043C2.50173 11.8736 2.57381 11.1298 2.71797 9.6421L2.75526 9.25724C2.79623 8.83445 2.81672 8.62309 2.75576 8.42708C2.69482 8.23106 2.55934 8.07264 2.28837 7.75579L2.04168 7.46732C1.08815 6.35232 0.611385 5.79477 0.77777 5.25975C0.944155 4.7247 1.6435 4.56647 3.04218 4.25L3.40404 4.16813C3.80149 4.0782 4.00022 4.03324 4.15979 3.9121C4.31936 3.79097 4.4217 3.60739 4.62638 3.24021L4.81272 2.90593Z"
                  fill="#E0E0E0"
                  stroke="#E0E0E0"
                  stroke-width="0.852966"
                />
              </svg>
            </div>
          </template>
          <template #is_reviewed="data">
            <span
              class="badge badge-outline-info"
              v-if="!data.value.is_reviewed"
              >Belum Dikoreksi</span
            >
            <span
              class="badge badge-outline-danger"
              v-else-if="!data.value.is_true"
              >Salah</span
            >
            <span class="badge badge-outline-success" v-else>Benar</span>
          </template>
          <template #all_progress="data">
            <div class="flex items-center">
              <div
                class="w-3/5 min-w-[100px] h-2.5 bg-gray-200 dark:bg-dark/40 rounded-full flex items-center"
              >
                <div
                  :class="`h-2.5 rounded-full rounded-bl-full text-center text-white text-xs bg-[#805DCA]`"
                  :style="`width:${allProgress(
                    data.value.user_materials_count,
                    data.value.fasih_user_items_count,
                    data.value.mudabbir_recordeds_count
                  )}%;`"
                ></div>
              </div>
              <span class="text-secondary ml-1"
                >{{
                  allProgress(
                    data.value.user_materials_count,
                    data.value.fasih_user_items_count,
                    data.value.mudabbir_recordeds_count
                  )
                }}%</span
              >
            </div>
          </template>
          <template #level_material="data">
            <span
              class="badge"
              :class="{
                'bg-success':
                  data.value?.last_user_material == null ||
                  data.value?.last_user_material?.material?.chapter == 1,
                'bg-info':
                  data.value?.last_user_material?.material?.chapter == 2,
                'bg-warning':
                  data.value?.last_user_material?.material?.chapter == 3,
              }"
              >{{
                data.value.last_user_material
                  ? data.value.last_user_material?.material?.chapter == 1
                    ? "Hijaiyah"
                    : data.value.last_user_material?.material?.chapter == 2
                    ? "Tahsin"
                    : "Tajwid"
                  : "Hijaiyah"
              }}</span
            >
          </template>
          <template #level_mudabbir="data">
            <span
              class="badge"
              :class="
                materialColor(
                  data.value.is_fasih3 ? 3 : data.value.is_fasih2 ? 2 : 1
                )
              "
              >{{
                data.value.is_fasih3
                  ? "Level 3"
                  : data.value.is_fasih2
                  ? "Level 2"
                  : "Level 1"
              }}</span
            >
          </template>
          <template #achievement_score="data">
            <span
              :class="{
                'text-secondary': 80 < (data.value.achievement?.score ?? 0),
                'text-danger': 80 > (data.value.achievement?.score ?? 0),
              }"
              >{{ data.value.achievement?.score ?? 0 }}%</span
            >
          </template>
        </vue3-datatable>
      </div>
    </div>
    <TransitionRoot appear :show="openModal" as="template">
      <Dialog as="div" @close="openModal = false" class="relative z-50">
        <TransitionChild
          as="template"
          enter="duration-300 ease-out"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="duration-200 ease-in"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <DialogOverlay class="fixed inset-0 bg-[black]/60" />
        </TransitionChild>

        <div class="fixed inset-0 overflow-y-auto">
          <div class="flex min-h-full items-center justify-center px-4 py-8">
            <TransitionChild
              as="template"
              enter="duration-300 ease-out"
              enter-from="opacity-0 scale-95"
              enter-to="opacity-100 scale-100"
              leave="duration-200 ease-in"
              leave-from="opacity-100 scale-100"
              leave-to="opacity-0 scale-95"
            >
              <DialogPanel
                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg text-black dark:text-white-dark"
              >
                <button
                  type="button"
                  class="absolute top-4 ltr:right-4 rtl:left-4 text-gray-400 hover:text-gray-800 dark:hover:text-gray-600 outline-none"
                  @click="openModal = false"
                >
                  <svg
                    width="15"
                    height="15"
                    viewBox="0 0 15 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14 1.00005L1.00006 14M1 1L13.9999 13.9999"
                      :stroke="store.isDarkMode ? 'white' : 'black'"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    />
                  </svg>
                </button>
                <div
                  class="text-lg font-bold ltr:pl-5 rtl:pr-5 pt-3 pb-1 ltr:pr-[50px] rtl:pl-[50px]"
                >
                  Filter
                </div>

                <div class="p-5"></div>
                <!-- <p class="dark:text-white-dark text-gray-500 font-semibold px-5 mb-2">
                    {{
                      mudabbirSelected && mudabbirSelected.surainstitution
                        ? 'Surah ' + mudabbirSelected.surainstitution.tname + ' Ayat ' + mudabbirSelected.aya
                        : ''
                    }}
                  </p> -->
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>
  </div>
</template>
