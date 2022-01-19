import { Component, OnInit, ViewChild } from '@angular/core';
import { MatTableDataSource } from '@angular/material/table';
import { Repas } from '../repas';
import { RepasService } from './../repas.service';
import { MatPaginator } from '@angular/material/paginator';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {

  displayedColumns: string[] = ['nom', 'action'];
  // dataSource: MatTableDataSource<Repas>;
  repass: Repas | undefined;
  data: Repas[];
  dataSource: MatTableDataSource<Repas>;

  
  @ViewChild(MatPaginator) paginator!: MatPaginator;
  constructor(private repasService: RepasService) { 
    this.data = [];
    this.dataSource = new MatTableDataSource();
  }
  
  ngAfterViewInit(){
    this.dataSource.paginator = this.paginator;
  }

  ngOnInit(): void {
    this.repasService.getAll().subscribe( (data: any) =>{
      this.dataSource.data = data.data; 
      console.log("DATASOURCE", this.dataSource.data);
    })
    // console.log("DATASOURCE OUT", this.repass);
    // this.getRepas();
  }
  
  getRepas(){
  }
}
