<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import Table from "@/Components/Admin/Table/Table.vue";

defineProps({
    pageTitle:{
        type: String,
    },
    tableHeads:{
        type: Array,
    },
    categories: {
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
                                :href="route('admin.categories.create')"
                                class="btn btn-success">
                                <i class="flaticon2-plus-1"></i> Add New
                            </Link>

                        </div>
                    </div>
                    <div class="card-body">
                        <Table :tableHeads="tableHeads" :data="categories"/>
<!--                        <table class="table table-bordered">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th scope="col">{{tableHeads.sr_no}}</th>-->
<!--                                <th scope="col">{{tableHeads.name}}</th>-->
<!--                                <th scope="col">{{tableHeads.status}}</th>-->
<!--                                <th scope="col">{{tableHeads.action}}</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr  key="{{category.id}}" v-for="category in categories">-->
<!--                                <th scope="row">{{category.id}}</th>-->
<!--                                <td>{{category.name}}</td>-->
<!--                                <td>-->
<!--                                <span class="label label-inline label-light-primary font-weight-bold">-->
<!--                                    Pending-->
<!--                                </span>-->
<!--                                </td>-->
<!--                                <td>Action</td>-->
<!--                            </tr>-->
<!--&lt;!&ndash;                            <tr>&ndash;&gt;-->
<!--&lt;!&ndash;                                <th scope="row">2</th>&ndash;&gt;-->
<!--&lt;!&ndash;                                <td>Ana</td>&ndash;&gt;-->
<!--&lt;!&ndash;                                <td>Jacobs</td>&ndash;&gt;-->
<!--&lt;!&ndash;                                <td>&ndash;&gt;-->
<!--&lt;!&ndash;                                <span class="label label-inline label-light-success font-weight-bold">&ndash;&gt;-->
<!--&lt;!&ndash;                                    Approved&ndash;&gt;-->
<!--&lt;!&ndash;                                </span>&ndash;&gt;-->
<!--&lt;!&ndash;                                </td>&ndash;&gt;-->
<!--&lt;!&ndash;                            </tr>&ndash;&gt;-->
<!--&lt;!&ndash;                            <tr>&ndash;&gt;-->
<!--&lt;!&ndash;                                <th scope="row">3</th>&ndash;&gt;-->
<!--&lt;!&ndash;                                <td>Larry</td>&ndash;&gt;-->
<!--&lt;!&ndash;                                <td>Pettis</td>&ndash;&gt;-->
<!--&lt;!&ndash;                                <td>&ndash;&gt;-->
<!--&lt;!&ndash;                                <span class="label label-inline label-light-danger font-weight-bold">&ndash;&gt;-->
<!--&lt;!&ndash;                                    New&ndash;&gt;-->
<!--&lt;!&ndash;                                </span>&ndash;&gt;-->
<!--&lt;!&ndash;                                </td>&ndash;&gt;-->
<!--&lt;!&ndash;                            </tr>&ndash;&gt;-->
<!--                            </tbody>-->
<!--                        </table>-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>

    </AuthenticatedLayout>
</template>
