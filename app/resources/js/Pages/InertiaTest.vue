<!-- 下記のscript setupは絶対に必要 HTMLはtemplate内に書く -->
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
<h1>Inertiaテストです</h1><br>
<a href="/">aタグ経由</a><br>
<Link href="/">Linkタグ経由</Link><br>
<Link v-bind:href="route('inertia.index')">Controller経由のIndex</Link><br>
<Link v-bind:href="route('inertia.show', { id: 50 })">ルートパラメータのテスト</Link><br>
</template>