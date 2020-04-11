<template>
    <div>
        <form ref="formulario">
            <div class="form-group">
                <input type="text" id="nome" v-model="campos.nome" name="nome" class="form-control">
            </div>
            <div class="form-group">
                <button @click.prevent="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            campos: {}
        }
    },
    methods: {
        submit() 
        {
            axios.post('/cadastrar', this.campos)
            .then(res => {
                console.log('Criado');
            });
        }
    }
}
</script>