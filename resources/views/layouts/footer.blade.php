<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Unga Group.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted <i class="mdi mdi-heart text-danger"></i> by <a href="https://www.peakanddale.com/"
                        target="_blank" class="text-reset">PeakandDale</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- Required datatable js -->
<script src="{{ asset('libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>


<script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<script>
    $("#collection_spinner").hide();

    $(".collect").css("display", "none");

    function collectionPoint(elem) {
        if (elem === "collect") {
            $(".collect").css("display", "block");
        } else {
            $(".collect").css("display", "none");
        }
    }

    $(function () {
            $('input[type="number"]').niceNumber();
        });
</script>
</body>

</html>
