<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Table from "@/Components/Admin/Table/Table.vue";
import Status from "@/Components/Admin/Common/Status.vue";
import FlashMessage from "@/Components/Admin/Common/FlashMessage.vue";
import Pagination from "@/Components/Admin/Common/Pagination.vue";

defineProps({
    pageTitle:{
        type: String,
    },
    tableHeads:{
        type: Array,
    },
    businessCategories: {
        type: Object,
        default: () => ({}),
    }
});
</script>

<template>
    <Head title="Category" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{pageTitle}}</h2>
        </template>

        <div class="row">
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <h3 class="card-label">{{pageTitle}}</h3>
                        </div>
                        <div class="card-toolbar">
                            <Link
                                :href="route('admin.business-categories.create')"
                                class="btn btn-success">
                                <i class="flaticon2-plus-1"></i> Add New
                            </Link>

                        </div>
                    </div>
                    <div class="card-body">
                        <FlashMessage/>
                        <Table :tableHeads="tableHeads">
                            <tr v-for="(category,index) in businessCategories.data">
                                <th scope="row">{{index+1}}</th>
                                <td>{{category.name}}</td>
                                <td>
                                    <Status :status="category.status"/>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-info"> Edit</a>
                                </td>
                            </tr>
                        </Table>
                        <Pagination :links="businessCategories.links"/>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>

    </AuthenticatedLayout>
</template>
