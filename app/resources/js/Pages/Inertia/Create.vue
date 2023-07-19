<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const form = reactive( //オブジェクトにしておくことでsubmitでまとめて登録することができる
    {
        title: null,
        contents: null,
    }
    // フォームで入力した内容がリアルタイムに反映される
)

const submit = () => {
    Inertia.post('/inertia', form) //inertiaというURLにconst formの値を送る処理
}

</script>
<template>
    <h1>フォームを使用したバージョン</h1>
    <!-- preventはページ全体ではなく一部だけを読み込ませる処理 -->
    <form v-on:submit.prevent="submit">
        <input type="text" name="title" v-model="form.title"> 
        <input type="text" name="contents" v-model="form.contents">
        <button>送信</button>
    </form>
</template>