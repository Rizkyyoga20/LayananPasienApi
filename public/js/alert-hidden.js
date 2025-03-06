
      //StartAntrian
      const alertAntrian = document.getElementById('liveAlertAntrian')
      const appendAlertAntrian = (message, type) => {
      const wrapper = document.createElement('div')

      wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertAntrian.append(wrapper)
      }

      const alertApiAntrian = document.getElementById('ApiAntrian')
      if (alertApiAntrian) {
        alertApiAntrian.addEventListener('click', () => {
          appendAlertAntrian('API Antrian Not Found', 'success')
        })
      }
      //EndAntrian

      //StartEntriPasien
      const alertEntriPasien = document.getElementById('liveAlertEntriPasien')
      const appendAlertEntriPasien = (message, type) => {
      const wrapper = document.createElement('div')

      wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertEntriPasien.append(wrapper)
      }

      const alertApiEntriPasien = document.getElementById('ApiEntriPasien')
      if (alertApiEntriPasien) {
        alertApiEntriPasien.addEventListener('click', () => {
          appendAlertEntriPasien('API POST : /users', 'success')
        })
      }
      //EndEntriPasien

      //StartListPasien
      const alertListPasien = document.getElementById('liveAlertListPasien')
      const appendAlertListPasien = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertListPasien.append(wrapper)
      }

      const alertApiListPasien = document.getElementById('ApiListPasien')
      if (alertApiListPasien) {
        alertApiListPasien.addEventListener('click', () => {
          appendAlertListPasien('API GET : /users', 'success')
        })
      }
      //EndListPasien

      //StartEntriKonsul
      const alertEntriKonsul = document.getElementById('liveAlertEntriKonsul')
      const appendAlertEntriKonsul = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertEntriKonsul.append(wrapper)
      }

      const alertApiEntriKonsul = document.getElementById('ApiEntriKonsul')
      if (alertApiEntriKonsul) {
        alertApiEntriKonsul.addEventListener('click', () => {
          appendAlertEntriKonsul('API POST : /konsuls', 'success')
        })
      }
      //EndEntriKonsul

      //StartListKonsul
      const alertListKonsul = document.getElementById('liveAlertListKonsul')
      const appendAlertListKonsul = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertListKonsul.append(wrapper)
      }

      const alertApiListKonsul = document.getElementById('ApiListKonsul')
      if (alertApiListKonsul) {
        alertApiListKonsul.addEventListener('click', () => {
          appendAlertListKonsul('API GET : /konsuls', 'success')
        })
      }
      //EndListKonsul


      //StartListObat
      const alertListObat = document.getElementById('liveAlertListObat')
      const appendAlertListObat = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertListObat.append(wrapper)
      }

      const alertApiListObat = document.getElementById('ApiListObat')
      if (alertApiListObat) {
        alertApiListObat.addEventListener('click', () => {
          appendAlertListObat('API GET : /obats', 'success')
        })
      }
      //EndListObat



      //StartEntriObat
      const alertEntriObat = document.getElementById('liveAlertEntriObat')
      const appendAlertEntriObat = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertEntriObat.append(wrapper)
      }

      const alertApiEntriObat = document.getElementById('ApiEntriObat')
      if (alertApiEntriObat) {
        alertApiEntriObat.addEventListener('click', () => {
          appendAlertEntriObat('API POST : /obats', 'success')
        })
      }
      //EndEntriObat



      //StartEntriResep
      const alertEntriResep = document.getElementById('liveAlertEntriResep')
      const appendAlertEntriResep = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertEntriResep.append(wrapper)
      }

      const alertApiEntriResep = document.getElementById('ApiEntriResep')
      if (alertApiEntriResep) {
        alertApiEntriResep.addEventListener('click', () => {
          appendAlertEntriResep('API POST : /reseps', 'success')
        })
      }
      //EndEntriResep



      //StartListResep
      const alertListResep = document.getElementById('liveAlertListResep')
      const appendAlertListResep = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertListResep.append(wrapper)
      }

      const alertApiListResep = document.getElementById('ApiListResep')
      if (alertApiListResep) {
        alertApiListResep.addEventListener('click', () => {
          appendAlertListResep('API GET : /reseps', 'success')
        })
      }
      //EndListResep



      //StartLaporanKonsulPasien
      const alertLaporanKonsulPasien = document.getElementById('liveAlertLaporanKonsulPasien')
      const appendAlertLaporanKonsulPasien = (message, type) => {
      const wrapper = document.createElement('div')

        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible alert-danger mt-2" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertLaporanKonsulPasien.append(wrapper)
      }

      const alertApiLaporanKonsulPasien = document.getElementById('ApiLaporanKonsulPasien')
      if (alertApiLaporanKonsulPasien) {
        alertApiLaporanKonsulPasien.addEventListener('click', () => {
          appendAlertLaporanKonsulPasien('API GET : /konsuls', 'success')
        })
      }
      //EndLaporanKonsulPasien

