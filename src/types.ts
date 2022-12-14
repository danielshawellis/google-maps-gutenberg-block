export type MapSettings = {
  key: string,
  height: number,
  mapmode: 'place'| 'view'| 'directions'| 'streetview'| 'search' | 'themed',
  q: string,
  center: string,
  zoom: number,
  maptype: 'roadmap' | 'satellite',
  language: string,
  region: string,
  origin: string,
  destination: string,
  waypoints: string,
  mode: 'driving' | 'walking' | 'bicycling' | 'transit' | 'flying',
  avoid: string,
  units: '' | 'metric' | 'imperial',
  location: string,
  pano: string,
  heading: number,
  pitch: number,
  fov: number,
  styles: string,
  themedmaptype: 'roadmap' | 'satellite' | 'hybrid' | 'terrain',
  uivisibility: boolean,
  markervisibility: boolean
}