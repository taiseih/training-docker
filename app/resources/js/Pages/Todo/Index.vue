<script setup>
import { reactive } from 'vue';

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

    <form v-on:submit.prevent="submit" class="w-full">
        <div class="text-center"> 
            <label for="name">
                タイトル
                <input type="text" name="name" v-model="form.name">
            </label>
        </div>
        <div class="">
            <label for="detail">
                コンテンツ
                <input type="text" name="detail" v-model="form.detail">
            </label>
        </div>
        <button>登録</button>
    </form>
</template>