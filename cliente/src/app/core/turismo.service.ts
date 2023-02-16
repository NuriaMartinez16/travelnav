import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import { Observable, of, throwError } from 'rxjs';
import { catchError, tap, map } from 'rxjs/operators';

import { Turismo } from '../shared/turismo';

@Injectable({
  providedIn: 'root',
})
export class TurismoService {
  //private turismosUrl = 'api/turismos';
  private turismosUrl = 'https://localhost:8000/turismo';
  private newTurismoUrl = 'https://localhost:8000/turismo/new';

  constructor(private http: HttpClient) {}

  getTurismos(): Observable<Turismo[]> {
    return this.http.get<any>(this.turismosUrl).pipe(
      tap((data) => console.log(JSON.stringify(data))),
      map((data) => {
        return data[0];
      }),
      catchError(this.handleError)
    );
  }

  getMaxTurismoId(): Observable<number> {
    return this.http.get<Turismo[]>(this.turismosUrl).pipe(
      // Get max value from an array
      map((data) =>
        Math.max.apply(
          Math,
          data.map(function (o) {
            return o.id;
          })
        )
      ),
      catchError(this.handleError)
    );
  }

  getTurismoById(id: number): Observable<Turismo> {
    const url = `${this.turismosUrl}/${id}`;
    return this.http.get<any>(url).pipe(
      tap((data) => console.log('getTurismo: ' + JSON.stringify(data))),
      map((data) => {
        return data[0];
      }),
      catchError(this.handleError)
    );
  }

  createTurismo(product: Turismo): Observable<Turismo> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    product.id = 0;
    return this.http
      .post<Turismo>(this.newTurismoUrl, product, { headers: headers })
      .pipe(
        tap((data) => console.log('createTurismo: ' + JSON.stringify(data))),
        map((data) => {
          return data;
        }),
        catchError(this.handleError)
      );
  }

  deleteTurismo(id: number): Observable<{}> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    const url = `${this.turismosUrl}/${id}`;
    return this.http.delete<Turismo>(url, { headers: headers }).pipe(
      tap((data) => console.log('deleteTurismo: ' + id)),
      catchError(this.handleError)
    );
  }

  updateTurismo(product: Turismo): Observable<Turismo> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    const url = `${this.turismosUrl}/${product.id}`;
    return this.http.put<Turismo>(url, product, { headers: headers }).pipe(
      tap(() => console.log('updateTurismo: ' + product.id)),
      // Return the product on an update
      map(() => product),
      catchError(this.handleError)
    );
  }

  private handleError(err: any) {
    // in a real world app, we may send the server to some remote logging infrastructure
    // instead of just logging it to the console
    let errorMessage: string;
    if (err.error instanceof ErrorEvent) {
      // A client-side or network error occurred. Handle it accordingly.
      errorMessage = `An error occurred: ${err.error.message}`;
    } else {
      // The backend returned an unsuccessful response code.
      // The response body may contain clues as to what went wrong,
      errorMessage = `Backend returned code ${err.status}: ${err.body.error}`;
    }
    console.error(err);
    return throwError(errorMessage);
  }
}
