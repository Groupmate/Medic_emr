</div>
</div>


<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script>
    window.addEventListener('DOMContentLoaded', ()=> {
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')
        
        menuBtn.addEventListener('click', () => {
            /* if(dropdown.classList.contains('hidden')){
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
            }else{
                dropdown.classList.remove('flex')
                dropdown.classList.add('hidden')
            } */

            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })

    })
</script>
<!-- end script -->
@livewireScripts
</body>
</html>