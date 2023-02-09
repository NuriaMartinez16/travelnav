import { Component, OnInit } from '@angular/core';
import { Turismo } from '../shared/turismo';
import { TurismoService } from '../core/turismo.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
})
export class HomeComponent implements OnInit {
  turismos: Turismo[] = [];
  constructor(private turismoService: TurismoService) {}

  ngOnInit() {
    this.turismoService.getTurismos().subscribe((data: Turismo[]) => {
        this.turismos = data;
      });
  }
}
