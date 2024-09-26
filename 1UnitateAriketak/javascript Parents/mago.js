class Mago extends Heroe{   
    constructor (izena, maila, hizkuntza){
        super(izena, maila);
        this._hizkuntza = hizkuntza;
    }

    get hizkuntza(){return this._hizkuntza}
    set hizkuntza(hizkuntza){this._hizkuntza=hizkuntza}

    toString(){
        return `Mi nombre es ${this._izena}, ${this._maila} puntu daukat eta nire hizkuntza ${this._maila} da`;
    }
}
new Mago ("Izaro", 100, "Quechua");