<!-- 下記のscript setupは絶対に必要 HTMLはtemplate内に書く -->
<script setup> 
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    InertiaフォルダのIndexです<br>
    <div v-if="$page.props.flash.message" class="bg-blue-300">{{ $page.props.flash.message }}</div>
    <Link v-bind:href="route('inertia.test')">inertiaテスト画面</Link>
</template>
