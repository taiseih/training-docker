<!-- 下記のscript setupは絶対に必要 HTMLはtemplate内に書く -->
<script setup> 
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    InertiaフォルダのIndexです<br>
    <Link v-bind:href="route('inertia.test')">inertiaテスト画面</Link>
</template>
