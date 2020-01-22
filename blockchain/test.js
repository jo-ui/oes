const EC = require("elliptic").ec;
const btnin = document.getElementById('btn');
const inp = document.getElementById('input');
const out = document.getElementById('out');

btnin.addEventListener('click', disp);

function disp(event) {
    switch (event.target.id) {

        case ('btn'):
            alert("out");
            var name = inp.value;
            if (name.length === 0) {
                alert('please enter some thing')
            }
            out.value = name;

    }

}