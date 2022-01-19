import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { RepasService } from 'src/app/repas/repas.service';

@Component({
  selector: 'app-repas-ingredients',
  templateUrl: './repas-ingredients.component.html',
  styleUrls: ['./repas-ingredients.component.css']
})
export class RepasIngredientsComponent implements OnInit {

  constructor(private activatedRoute : ActivatedRoute, private repasService : RepasService) { }
  
  repasIngredients : any;

  ngOnInit(): void {
    let id = this.activatedRoute.snapshot.paramMap.get('id');
    this.repasService.repas_ingredients(id).subscribe( (data: any) =>{
      this.repasIngredients = data.data; 
      console.log("BALAANSAHV", this.repasIngredients);
    })
  }

}
