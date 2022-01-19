import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Repas } from './repas';


@Injectable({
  providedIn: 'root'
})
export class RepasService {

  private apiURL = "http://localhost:8000/api/";

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
 }


  constructor(private httpClient: HttpClient) { }

  getAll(): Observable<Repas[]> {
    return this.httpClient.get<Repas[]>(this.apiURL + 'repas');
  }
  
  repas_crees(): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + 'repas/crees');
  }

  repas_ingredients(id: any): Observable<any>{
    return this.httpClient.get<any>(this.apiURL + 'repas/ingredient/' + id);
  }
  
  addRepas(val: any){
    return this.httpClient.post(this.apiURL + "repas/add", val);
  }
  createRepas(val: any){
    return this.httpClient.post(this.apiURL + "repas/create" , val);
  }
}
