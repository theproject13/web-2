
        <footer class="main-footer">
            <p>&copy; <?php echo date('Y'); ?> Dashboard Akademik. All rights reserved.</p>
        </footer>
    </div>
    
    <script>
    function toggleSubmenu(event, submenuId) {
        event.preventDefault();
        const submenu = document.getElementById(submenuId);
        const arrow = event.currentTarget.querySelector('.submenu-arrow');
        
        submenu.classList.toggle('active');
        arrow.classList.toggle('fa-chevron-down');
        arrow.classList.toggle('fa-chevron-up');
    }

    function searchCourses() {
        const input = document.getElementById('courseSearch');
        const filter = input.value.toUpperCase();
        const courseList = document.getElementById('courseList');
        const courses = courseList.getElementsByTagName('li');

        for (let i = 0; i < courses.length; i++) {
            const courseName = courses[i].textContent || courses[i].innerText;
            if (courseName.toUpperCase().indexOf(filter) > -1) {
                courses[i].style.display = '';
            } else {
                courses[i].style.display = 'none';
            }
        }
    }
    </script>
</body>
</html>