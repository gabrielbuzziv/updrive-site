<div class="container">
    <div class="navigation">
        <div class="pull-left">
            <div class="logo">
                <h1>
                    <b>UP</b>
                    Drive
                </h1>
            </div>
        </div>

        <div class="pull-right">
            <ul class="nav-menu">
                <li>
                    <a href="#">Como funciona?</a>
                </li>

                <li>
                    <a href="#">Contato</a>
                </li>
            </ul>

            <button class="btn btn-transparent" @click.prevent="$root.$emit('show::demonstration')">
                Solicitar Demonstração
            </button>
        </div>

        <div class="clearfix"></div>
    </div>
</div>