<script setup>
import { reactive } from 'vue';
import {Inertia} from '@inertiajs/inertia';

defineProps({
    errors: Object
});

const form = reactive({
    name: null,
    detail: null
});

const submit = () => {
    Inertia.post('/todo', form);
}

</script>

<template>
    todoアプリです
    <div v-if="$page.props.flash.message">{{ $page.props.flash.message }}</div>
    <div class="w-full max-w-xs">
        <form v-on:submit.prevent="submit" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    タイトル
                    <input type="text" name="name" v-model="form.name"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label>
                <p v-if="errors.name" class="text-red-500">{{ errors.name }}</p>
            </div>
            <div class="mb-6">
                <label for="detail" class="block text-gray-700 text-sm font-bold mb-2">
                    コンテンツ
                    <input type="text" name="detail" v-model="form.detail"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                </label>
                <p v-if="errors.detail" class="text-red-500">{{ errors.detail }}</p>
            </div>
                <button
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    登録
                </button>
        </form>
    </div>
</template>