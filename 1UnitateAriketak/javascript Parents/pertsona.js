class Pertsona{
    _Izena='';
    _Abizena = '';
    _NAN = '';
    _Jaioturtea = 0;
    _Probintzia = '';

    constructor(Izena, Abizena, NAN, Jaioturtea, Probintzia){
        this._Izena = Izena;
        this._Abizena = Abizena;
        this._NAN = NAN;
        this._Jaioturtea = Jaioturtea;
        this._Probintzia = Probintzia;
    }

    get Izena(){return this._Izena}
    set Izena(Izena){this._Izena=Izena}

    get Abizena(){return this._Abizena}
    set Abizena(Abizena){this._Abizenak=Abizena}

    get NAN(){return this._NAN}
    set NAN(NAN){this._NAN=NAN}

    get Jaioturtea(){return this._Jaioturtea}
    set Jaioturtea(Jaioturtea){this._Jaioturtea=Jaioturtea}

    get Probintzia(){return this._Probintzia}
    set Probintzia(Probintzia){this._Probintzia=Probintzia}

    generaLogin(){
        let lehena = this._Izena[0];
        let abiz = this._Abizena;
        let urte = ""+this._Jaioturtea;
        let urtebi= urte.slice(-2);
        return lehena+abiz+urtebi;
    }

    getAdina(){
        let urte = new Date().getFullYear();
        return urte-this.Jaioturtea;
    }

    toString(){
        return `Informazioa: ${this._Izena} ${this.Abizena}, ${this._NAN}, ${this._Jaioturtea}, ${this._Probintzia}`
    }

    toHTML(){
        return `<h1>${this._Izena} ${this._Abizena}</h1>`
               `<p>${this._NAN}, ${this._Jaioturtea}, ${this._Probintzia}</p>`;
    }
    
    toNanLogin(){
        this.generaLogin()+this._NAN+this.getAdina()
    }
}


/*
G. toHTML (): katea. Guztietan datzan kate bat itzultzen du
HTML formatuko kate batean kateatutako propietateak
(Zerrenda moduan izan daiteke, paragrafo bat, nahi den moduan).
Klasea inplementatzeaz gain, dagokion script-ean:
- Probako 4 erabiltzaile sortuko dira.
- Javascripten kontsolan erakutsiko dira bakoitzaren propietateak.
Erabiltzailea.
- HTML orrian erabiltzaile bakoitzaren propietateak erakutsiko dira.
- HTML orriko zerrenda batean agertuko da erabiltzaile bakoitzaren NANa.
Ondoren logina eta adina.*/