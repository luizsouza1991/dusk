<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- <div class="card-header">Página inicial</div> -->

                    <div class="card-body">
                        {{ detalhes.firstname }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                detalhes: {
                    firstname: 'Luiz',
                    lastname: 'Souza'
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
