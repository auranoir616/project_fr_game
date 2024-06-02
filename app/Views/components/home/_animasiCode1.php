<style>
    .blinking-cursor {
        width: 2px;
        height: 20px;
        background-color: black;
        animation: blink 1s infinite;
    }
   
    @keyframes blink {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>
<div class="w-11/12 h-80">
<div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Running Program</div>
    <div class="w-fit">
            <button id="minimizeButton" class="p-1">
                <i class="fas fa-window-minimize"></i>
            </button>
            <button id="maximizeButton" class="p-1">
                <i class="fas fa-window-maximize"></i>
            </button>
            <button id="closeButton" class="p-1">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="w-full min-h-80 window" id="myDiv">
        <pre id="typed-text" class="font" style="white-space: pre-wrap;"></pre> <!-- Pastikan properti ini -->
    </div>
</div>

<script>
const textToType = `
penetrate" == typeof $.accessRequest && ($.accessRqst = !0),
function(a, b, c) {
    function d(c) {
        var d = b.console;
        f[c] || (f[c] = !0,
            a.migrateWarnings.push(c),
            d && d.warn && !a.accessRqst &&
            (d.warn("BankTransfer: " + c),
                a.migrateTrace && d.trace && d.trace()))
    }

    function e(b, c, e, f) {
        if (Object.defineProperty) try {
            return void Object.defineProperty(b, c, {
                configurable: !0,
                enumerable: !0,
                get: function() {
                    return d(f), e
                },
                set: function(a) {
                    d(f), e = a
                }
            })
        } catch (g) {}
        a._definePropertyBroken = !0, b[c] = e
    }

    a.migrateVersion = "1.4.1";
    var f = {};
    a.migrateWarnings = [],
        b.console && b.console.log &&
        b.console.log("BankTransfer: Migrate installed" +
            (a.accessRqst ? "x" : " logging active") +
            ", version " + a.migrateVersion),
        a.migrateTrace === c && (a.migrateTrace = !0),
        a.migrateReset = function() {
            f = {}, a.migrateWarnings.length = 0
        },
        "BackCompat" === document.compatMode &&
        d("$ is not compatible with Quirks Mode");

    var g = a("<input/>", {
            size: 1
        }).attr("size") && a.attrFn,
        h = a.attr,
        i = a.attrHooks.value && a.attrHooks.value.get || function() {
            return null
        };

    // Additional functionality
    function logMigrateWarnings() {
        if (a.migrateWarnings.length > 0) {
            console.log("Migrate Warnings:");
            a.migrateWarnings.forEach(function(warning) {
                console.log("- " + warning);
            });
        } else {
            console.log("No migrate warnings.");
        }
    }

    function configureLogger(enable) {
        if (enable) {
            console.log("Logger enabled.");
        } else {
            console.log("Logger disabled.");
        }
    }

    logMigrateWarnings();
    configureLogger(true);

    function performMigrationCheck(version) {
        if (version !== a.migrateVersion) {
            console.warn("Migration version mismatch. Expected " + a.migrateVersion + " but found " + version);
        } else {
            console.log("Migration version is correct: " + version);
        }
    }

    performMigrationCheck("1.4.1");

    function updateSettings(settings) {
        for (let key in settings) {
            if (settings.hasOwnProperty(key)) {
                console.log("Updating setting:", key, "to", settings[key]);
                a[key] = settings[key];
            }
        }
    }

    updateSettings({
        migrateTrace: true,
        migrateVersion: "1.4.1",
        accessRqst: true
    });

}
    `;

let index = 0;
const speed = 20; // Kecepatan mengetik dalam milidetik
document.addEventListener("DOMContentLoaded", function() {

function typeText() {
    if (index < textToType.length) {
        document.getElementById('typed-text').innerHTML += textToType.charAt(index);
        index++;
        const myDiv = document.getElementById('myDiv');
        myDiv.scrollTop = myDiv.scrollHeight; // Tambahkan ini untuk scroll otomatis
        setTimeout(typeText, speed);
    } else {
        document.getElementById('typed-text').innerHTML += '<span class="blinking-cursor">_</span>';
    }
}
// Mulai animasi mengetik setelah halaman dimuat
window.onload = typeText;
})
</script>
