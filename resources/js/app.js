import "./bootstrap";
import.meta.glob(["../images/**"]);
import jQuery from 'jquery';
window.$ = jQuery;


// Kemudian di dalam komponen Vue Anda
export default {
    mounted() {
        // Gunakan jQuery di sini
        // Misalnya:
        $("button").click(function() {
            alert("Hello, jQuery from Vue!");
        });
    }
}
