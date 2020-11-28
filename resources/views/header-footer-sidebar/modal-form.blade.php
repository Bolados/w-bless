<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 0;">
            <div class="modal-header main-bg white-color" style="padding: 50px">
                <h3 class="modal-title text-center" style="text-transform: uppercase"></h3>

            </div>
            <div class="modal-body" style="padding: 50px">
                <p>
                    Merci de remplir les données afin de voter
                </p>
                <form method="POST" action="{{route('votants.store')}}" id="votantForm">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" required class="form-control" name="email" id="email">
                        <input type="hidden" class="form-control" name="joueurId" id="joueurId">
                    </div>
                    <div style="display: none" id="suiteofform">
                        <div class="form-group">
                            <label class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" name="firstName" id="firstName">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Prémom:</label>
                            <input type="text" class="form-control" name="lastName" id="lastName">
                        </div>
                    </div>

                    <div class="text-center">
                        <button
                                class="wfc-button main-bg main-border-color white-color bordered  ">
                            Continuer
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
