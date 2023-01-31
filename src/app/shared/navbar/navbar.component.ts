import { Component, OnInit } from '@angular/core';
import { TurismoService } from '../../core/turismo.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {
  id: any;

  constructor(private turismoService: TurismoService, private router: Router) {}

  ngOnInit() {}

  newTurismo() {
    // Get max product Id from the product list
    this.turismoService.getMaxTurismoId().subscribe((data) => (this.id = data));
    this.router.navigate(['/turismo', this.id, 'new']);
  }
}
