        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('nativeBtn');
            const counter = document.getElementById('nativeCount');
            let count = 0;

            button.addEventListener('click', function() {
                count++;
                counter.textContent = count;
            });
        });