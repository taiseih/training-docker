<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
const props = defineProps({
    todo: Object,
})
const form = useForm({
    name: props.todo.name,
    detail: props.todo.detail
});

const submit = () => {
    form.put(route('todo.update', {id: props.todo.id})); //routeメソッドを使用しているためconst formのuseFormを使用する必要がある
}

</script>
<!-- v-bindとは変数をHTMLの属性に渡したり、propsに渡すため必要 -->
<template>
    {{ todo.name }}<br>
    {{ todo.detail }}<br>
    <form v-on:submit.prevent="submit">
        <input type="text" name="name" v-model="form.name"><br>
        <input type="text" name="detail" v-model="form.detail"><br>
        <button>更新</button>
    </form>
</template>