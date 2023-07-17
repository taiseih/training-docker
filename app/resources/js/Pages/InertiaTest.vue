<!-- 下記のscript setupは絶対に必要 HTMLはtemplate内に書く -->
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const title = ref('');
const contents = ref('');
</script>

<template>
    <h1>Inertiaテストです</h1><br>
    <a href="/">aタグ経由</a><br>
    <Link href="/">Linkタグ経由</Link><br>
    <Link v-bind:href="route('inertia.index')">Controller経由のIndex</Link><br>
    <Link v-bind:href="route('inertia.show', { id: 50 })">ルートパラメータのテスト</Link><br>
    <div class="mb-8"></div>
        <input type="text" name="title" v-model="title"><br>
        <input type="text" name="contents" v-model="contents"><br>
        <Link as="button" method="post" v-bind:href="route('inertia.store')" v-bind:data="{
                title : title,
                contents : contents
            }">
        DB保存テスト</Link>
</template>