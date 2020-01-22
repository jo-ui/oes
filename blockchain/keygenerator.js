    window.onload = function () {
      const btnin = document.getElementById('btn');
      const inp = document.getElementById('inputEmail4')
      const out = document.getElementById('inputPassword4_1')
      const EC = require("elliptic").ec;
      const ec = new EC("secp256k1");

      // You can use any elliptic curve you want

      // Generate a new key pair and convert them to hex-strings


      /*console.log("Your public key (also your wallet address, freely shareable)\n",
        publicKey,
        "\nYour private key (keep this secret! To sign transactions)\n",
        privateKey
      )*/

      ////sdcsdacsvasvas

      btnin.addEventListener('click', disp);


      function disp(event) {
        switch (event.target.id) {

          case ('btn'):
            var key = ec.genKeyPair();
            var publicKey = key.getPublic("hex");
            var privateKey = key.getPrivate("hex");
            alert('private');
            inp.Value = privateKey;
            out.Value = publicKey;

            // Print the keys to the console


        }
      }
    }


    var data = 'mom0';