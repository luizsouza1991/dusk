<template>
    <div>
        <form ref="formulario">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" id="nome" v-model="campos.nome" name="nome" class="form-control">
            </div>

            <!-- <div class="form-group">
                <label>Sexo</label><br>
                <span v-for="sexo in sexos">
                    <input type="radio" v-model="campos.sexo" :value="campos.sexo" name="sexo"> {{ sexo.nome }}
                </span>
            </div> -->
            <div class="form-group">
                <label>Linguagem preferida</label>
                <select type="text" id="linguagem" v-model="campos.linguagem" name="linguagem" class="form-control">
                    <option v-for="linguagem in linguagens" :value="linguagem.nome">{{ linguagem.nome }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Discorra sobre você</label>
                <textarea class="form-control" name="descricao" id="" cols="30" rows="10" v-model="campos.descricao"></textarea>
            </div>
            <div class="form-group">
                <button @click.prevent="submit" id="btn-salvar" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            campos: {},
            linguagens: [
                {'nome': 'Java'},
                {'nome': 'PHP'},
                {'nome': 'Python'}
            ],
            sexos: [
                {'nome' : 'Homem'},
                {'nome' : 'Mulher'}
            ]
        }
    },
    methods: {
        submit() 
        {
            axios.post('/cadastrar', this.campos)
            .then(res => {
                alert(res.data.message)
            });
        }
    }
}
</script>