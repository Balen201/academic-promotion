
</div>
</section>
</div>


<footer class="footer">
    <div class="footer__block block no-margin-bottom">
      <div class="container-fluid text-center">
        <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
         <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
      </div>
    </div>
  </footer>
</div>
</div>
<!-- JavaScript files-->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{ asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('admin/js/charts-home.js')}}"></script>
<script src="{{ asset('admin/js/front.js')}}"></script>

<script>
    // Function to set active link in local storage
    function setActiveLink(link) {
        localStorage.setItem('activeLink', link);
    }

    // Get all the links inside the list
    var links = document.querySelectorAll('.list-unstyled li a');

    // Iterate through each link
    links.forEach(function(link) {
        // Add a click event listener to each link
        link.addEventListener('click', function(event) {
            // Prevent the default behavior (navigating to a new page)
            event.preventDefault();

            // Remove the active class from any previously active link
            document.querySelector('.list-unstyled li.active').classList.remove('active');
            // Add the active class to the clicked link's parent <li> element
            this.parentElement.classList.add('active');

            // Set the active link in local storage
            setActiveLink(this.getAttribute('href'));

            // Get the URL from the clicked link's href attribute
            var url = this.getAttribute('href');

            // Navigate to the URL
            window.location.href = url;
        });
    });

    // Function to get active link from local storage and set active class
    function setActiveLinkFromStorage() {
        var activeLink = localStorage.getItem('activeLink');
        if (activeLink) {
            document.querySelector('.list-unstyled li.active').classList.remove('active');
            document.querySelector('.list-unstyled li a[href="' + activeLink + '"]').parentElement.classList.add('active');
        }
    }

    // Set active link when the page loads
    window.addEventListener('load', setActiveLinkFromStorage);
</script>
