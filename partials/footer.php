    <!-- Footer -->
    <footer class="text-center text-muted py-4 mt-auto">
      <p class="mb-0">&copy; <?= date("Y") ?> Aulia Yasmin. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional Custom JS -->
    <script>
      // Animasi ringan (opsional)
      document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(".animate");
        cards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add("show");
          }, 100 * index);
        });
      });
    </script>
  </body>
</html>

