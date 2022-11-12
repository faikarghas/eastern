import { each } from "jquery";

export class Home {

    tab(): void {
        $('#myTab li button').each(function () {
            $(this).on('click', function () {
                let target = $(this).attr('data-target')
                $('#myTab li button').css('background-color','#3C3C3C')
                $(this).css('background-color','#EE4C21')
                $(`#myTabContent .wrapperTabContent`).css('display','none')
                $(`#myTabContent .wrapperTabContent#${target}`).css('display','block')
            })
        })
    }
}

export function sum(a: number, b:number): number {
    return a + b;
}

