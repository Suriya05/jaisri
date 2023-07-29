<!-- Finance Loan Modal -->
<div class="modal fade" id="adsModal" tabindex="-1" aria-labelledby="adsModalLabel" aria-hidden="true">
  <div class="modal-dialog ads-modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <a href="contact.php"><img src="./assets/images/modals/jaisri-modal1.webp" /></a>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        setTimeout(function(){
            $("#adsModal").modal('show')
        }, 4000)
    });
</script>