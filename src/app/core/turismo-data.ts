import { InMemoryDbService } from 'angular-in-memory-web-api';

export class TurismoData implements InMemoryDbService {
  createDb() {
    let turismos = [
      {
        id: 0,
        nombre: 'Primer turismo',
        video: 'video1',
        ubicacion: '1',
        titular: 'A',
        descripcion: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        tipo: ['electronics', 'hardware'],
        foto: 'https://picsum.photos/820/300',
        
      },
      {
        id: 1,
        nombre: 'Segundo turismo',
        video: 'video2',
        ubicacion: '2',
        titular: 'B',
        descripcion: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        tipo: ['electronics', 'hardware'],
        foto: 'https://picsum.photos/820/300',
        
      },
      {
        id: 2,
        nombre: 'Tercer turismo',
        video: 'video3',
        ubicacion: '3',
        titular: 'C',
        descripcion: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        tipo: ['electronics', 'hardware'],
        foto: 'https://picsum.photos/820/300',
        
      },
      {
        id: 3,
        nombre: 'Cuarto turismo',
        video: 'video4',
        ubicacion: '4',
        titular: 'D',
        descripcion: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        tipo: ['electronics', 'hardware'],
        foto: 'https://picsum.photos/820/300',
        
      },
      {
        id: 4,
        nombre: 'Quinto turismo',
        video: 'video5',
        ubicacion: '5',
        titular: 'E',
        descripcion: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        tipo: ['electronics', 'hardware'],
        foto: 'https://picsum.photos/820/300',
        
      },
      {
        id: 5,
        nombre: 'Sesto estblecimiento',
        video: 'video6',
        ubicacion: '6',
        titular: 'F',
        descripcion: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        tipo: ['electronics', 'hardware'],
        foto: 'https://picsum.photos/820/300',
      },
    ];
    return { turismos: turismos };
  }
}
