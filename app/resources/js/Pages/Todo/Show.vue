<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";
const props = defineProps({
    todo: Object,
})
const form = reactive({
    id: props.todo.id,
    name: props.todo.name,
    detail: props.todo.detail
});

const submit = id => {
    Inertia.put(route('todo.update', {id: id}), form);
}

const deleteContent= id => {
    Inertia.delete(route('todo.destroy', {id: id}));
}

</script>
<!-- v-bindとは変数をHTMLの属性に渡したり、propsに渡すため必要 -->
<template>
    {{ todo.name }}<br>
    {{ todo.detail }}<br>
    <form v-on:submit.prevent="submit(todo.id)">
        <input type="text" name="name" v-model="form.name"><br>
        <input type="text" name="detail" v-model="form.detail"><br>
        <button>更新</button>
    </form>
        <button v-on:click="deleteContent(todo.id)">削除</button>
</template>