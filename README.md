# CriptoDice
---
from dead project [CryptoDice](https://github.com/felinegambler/CryptoDice)

CryptoDice is a popular CryptoCurrency Dice game, CryptoDice is free to use and distribute.

## Pre-Requisites
* Linux
* Apache2
* PHP
* MySQL
* bitcoind

## Installation

### bitcoind
* Install bitcoind
* Edit your bitcoin.conf in __~/.bitcoin/bitcoin.conf__ (you may need to create this) to look like the following, You will need to change the username and pass.

```
server=1
rpcuser=bitcoinrpc
rpcpassword=dfbufbSUBUSbf7763YSFYbfybsiyb87
rpcport=8332
```

* run bitcoind -daemon
* let it fully sync to the network before moving on to the next part (or the script will not work)

### CriptoDice
* install git (ubuntu: sudo apt-get install git)(fedora/redhat: sudo yum install git)
* Change to a directory of your choice and run the command (git clone https://github.com/blackout314/CriptoDice)
* Change to the inc/ directory and change the permissions to 777 (chmod 777 \*)
* Run the script from your prefered web browser and follow the installation instructions on screen
* Once completed remove the install directory for security reasons
* You now have access to http://your-server/dice/admin (or wherever you put the dice script)
* Finally, Deposit your funds using the receiving address on the wallet tab in the admin menu

