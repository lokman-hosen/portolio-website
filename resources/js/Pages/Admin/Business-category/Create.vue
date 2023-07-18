<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';
import PrimaryButton from '@/Components/Admin/Common/PrimaryButton.vue';

defineProps({
    pageTitle:{
        type: String,
    },
});

const form = useForm({
    name: '',
    status: 1,
});

const submit = () => {
    form.post(route('admin.business-categories.store'), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Business Categories" />

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
                                :href="route('admin.business-categories.index')"
                                class="btn btn-success">
                                <i class="flaticon2-plus-1"></i> Add New
                            </Link>

                        </div>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Name<span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control"
                                               v-model="form.name"
                                               placeholder="Name" />
                                        <div v-if="form.errors.name" class="invalid-feedback">{{form.errors.name}}</div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Status<span class="text-danger">*</span></label>
                                        <select class="form-control" name="status" v-model="form.status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        <div v-if="form.errors.status" class="invalid-feedback">{{form.errors.status}}</div>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success mr-3" :disabled="form.processing"><i class="flaticon2-paperplane"></i>Save</button>
                                    <button type="reset" class="btn btn-danger"><i class="flaticon-close"></i>Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>

    </AuthenticatedLayout>
</template>
