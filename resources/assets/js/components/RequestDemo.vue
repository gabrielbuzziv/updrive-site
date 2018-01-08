<template>
    <form action="" ref="form" @submit.prevent="onSubmit">
        <div class="form-group">
            <label for="name">Nome Completo</label>
            <input type="text" name="name" id="name" class="form-control" v-model="demo.name">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control" v-model="demo.email">
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" class="form-control" v-model="demo.phone">
        </div>

        <div class="form-group">
            <label for="company">Empresa</label>
            <input type="text" name="company" id="company" class="form-control" placeholder="ex: Acme LTDA"
                   v-model="demo.company">
        </div>

        <small>
            Solicitar uma demonstração adicionará você em nossa lista de e-mails.
            Você poderá se desinscrever a qualquer momento.
        </small>

        <div style="display:block;background: #000">

        </div>

        <button class="btn btn-primary" :disabled="requesting">
            <span class="loader" v-if="requesting"></span>
            Solicitar Agora
        </button>
    </form>
</template>

<script>
    export default {
        data () {
            return {
                requesting: false,
                token: 'a1b446e27687bd8b413deb51532c6fd518711816',
                demo: {
                    name: '',
                    email: '',
                    phone: '',
                    company: '',
                }
            }
        },

        methods: {
            onSubmit () {
                this.requesting = true
                window.axios.post(`solicitar-demonstracao`, { ... this.demo })
                    .then(response => {
                        this.requesting = false
                    })
                    .catch(() => this.requesting = false)
            }
        }
    }
</script>