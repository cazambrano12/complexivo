
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <footer class="container-fluid bg-secondary fixed-bottom">
        <div class="row">
            <div class="col-md text-light text-left py-0.5">
                Desarrollado por Cristian Zambrano
            </div>
        </div>
    </footer>
</body>

</html>
