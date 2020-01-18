import { Component} from '@angular/core';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.scss']
})
export class MainComponent  {

  p_basico:string[] = ['1 Cuenta', '10 GB de espacio', 'Dominio Personal'];
  p_standard:string[] = ['5 Cuenta', '50 GB de espacio', 'Dominio Personal'];
  p_premium:string[] = ['Cuentas Ilimitadas', '500 GB de espacio', 'Dominios Ilimitados'];
}
