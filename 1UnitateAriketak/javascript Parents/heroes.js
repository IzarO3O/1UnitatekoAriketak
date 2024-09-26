class Heroe{
    constructor(izena, maila){
        this._izena = izena;
        this._maila = maila;
    }

    get izena(){return this._izena}
    set izena(izena){this._izena=izena}

    get maila(){return this._maila}
    set izena(izena){this._maila=maila}

    toString(){
        return `Mi nombre es ${this._izena} eta ${this._maila} puntu daukat `;
    }
    agurra(){
        alert(`Kaixo, ${this._izena} naiz`);
    }
}

let h1= new Heroe("Laura", 5);
